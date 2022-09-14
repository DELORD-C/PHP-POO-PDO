<?php

class Renderer {
    function customers(array $customers) {
        echo '
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Outstanding</th>
                </tr>
            </thead>
            <tbody>
        ';
        foreach ($customers as $customer) {
            echo '
            <tr>
                <td>' . $customer->getCUST_NAME() . '</td>
                <td>' . $customer->getCUST_CITY() . '</td>
                <td>' . $customer->getCUST_COUNTRY() . '</td>
                <td>' . $customer->getOUTSTANDING_AMT() . '</td>
            </tr>
            ';
        }
        echo '
            </tbody>
        </table>
        ';
    }
}