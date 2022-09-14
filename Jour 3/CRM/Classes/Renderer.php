<?php

class Renderer {
    function __construct()
    {
        echo file_get_contents('Templates/header.html');
    }

    function customers(array $customers) {
        $template = file_get_contents('Templates/customer-list.html');
        $content = "";
        foreach ($customers as $customer) {
            $content .= '
            <tr>
                <td>' . $customer->getCUST_NAME() . '</td>
                <td>' . $customer->getCUST_CITY() . '</td>
                <td>' . $customer->getCUST_COUNTRY() . '</td>
                <td>' . $customer->getOUTSTANDING_AMT() . '</td>
            </tr>
            ';
        }
        echo str_replace('{{content}}', $content, $template);
    }

    function customerForm() {
        echo file_get_contents('Templates/customer-insert.html');
    }

    function __destruct()
    {
        echo '</body></html>';
    }
}