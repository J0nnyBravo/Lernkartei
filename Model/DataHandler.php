<?php

    namespace Model;

    class DataHandler
    {

        function fileToArray(&$arrayToTransform): array
        {
            $filename = "./Data/questions.txt";
            $handle = fopen($filename, "r");
            $i = 0;
            $arrayToTransform = array();
            while (!feof($handle))
            {
                $tmpArr = (explode("|", fgets($handle)));
                $arrayToTransform[$i] = $tmpArr;
                $i++;
            }
            fclose($handle);
            return $arrayToTransform;
        }

    }