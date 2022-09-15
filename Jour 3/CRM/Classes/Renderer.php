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

    function customerFormInsert() {
        //affichage du contenu du template customer-insert.html
        echo file_get_contents('Templates/customer-insert.html');
    }

    function customerFormEdit(Client $customer) {
        $template = file_get_contents('Templates/customer-edit.html');
        $template = str_replace([
            '{{CUST_CODE}}',
            '{{CUST_NAME}}',
            '{{CUST_CITY}}',
            '{{WORKING_AREA}}',
            '{{CUST_COUNTRY}}',
            '{{GRADE}}',
            '{{OPENING_AMT}}',
            '{{RECEIVE_AMT}}',
            '{{PAYMENT_AMT}}',
            '{{OUTSTANDING_AMT}}',
            '{{PHONE_NO}}',
            '{{AGENT_CODE}}'
        ], [
            $customer->getCUST_CODE(),
            $customer->getCUST_NAME(),
            $customer->getCUST_CITY(),
            $customer->getWORKING_AREA(),
            $customer->getCUST_COUNTRY(),
            $customer->getGRADE(),
            $customer->getOPENING_AMT(),
            $customer->getRECEIVE_AMT(),
            $customer->getPAYMENT_AMT(),
            $customer->getOUTSTANDING_AMT(),
            $customer->getPHONE_NO(),
            $customer->getAGENT_CODE() 
        ], $template);

        echo $template;
    }

    function __destruct()
    {
        //lors de la destruction de l'objet (fin du script), on ferme les balises html et body
        echo '</div></body></html>';
    }
}