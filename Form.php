<?php

    class Form{

        public static function alert($tipo,$mensagem){
            if($tipo == 'erro'){
                echo '<div style=" background:silver; color:red; font-size:15px;" >'.$mensagem.'</div>';
                return false;
            }else if($tipo == 'sucesso'){
                echo '<div style=" background:silver; color:green; font-size:15px;" >'.$mensagem.'</div>';
                return true;

            }
        }

        public static function cadastrar($ferias,$nome,$serie){
            $sql = Mysql::conectar()->prepare("INSERT INTO `formulario` VALUES (null,?,?,?) ");
            $sql->execute(array($ferias,$nome,$serie));
        }
    }
