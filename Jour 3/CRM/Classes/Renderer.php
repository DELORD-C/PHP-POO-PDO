<?php

class Renderer {
    function __construct()
    {
        //affichage de la partie supèrieur de notre page html (header)
        echo file_get_contents('Templates/header.html');
    }

    function customers(array $customers) {
        $template = file_get_contents('Templates/customer-list.html');
        //récupération du contenu du template html
        
        $content = "";

        //création des éléments html pour chaque client, et ajout dans la variable $content
        foreach ($customers as $customer) {
            $content .= '
            <tr>
                <td>' . $customer->getCUST_NAME() . '</td>
                <td>' . $customer->getCUST_CITY() . '</td>
                <td>' . $customer->getCUST_COUNTRY() . '</td>
                <td>' . $customer->getOUTSTANDING_AMT() . '</td>
                <td><a class="btn btn-primary" href="edit-customer.php?customer=' . $customer->getCUST_CODE() . '">Edit</a></td>
                <td><a class="btn btn-danger" href="?delete=' . $customer->getCUST_CODE() . '">Delete</a></td>
            </tr>
            ';
        }

        // on remplace la chaine de charactère '{{content}}' par le contenu de la variable $content
        // dans le template customer-list.php qui était stocké dans $template, puis on affiche le
        // résultat
        echo str_replace('{{content}}', $content, $template);
    }

    function customerForm() {
        //affichage du contenu du template customer-insert.html
        echo file_get_contents('Templates/customer-insert.html');
    }

    function __destruct()
    {
        //lors de la destruction de l'objet (fin du script), on ferme les balises html et body
        echo '</div></body></html>';
    }
}