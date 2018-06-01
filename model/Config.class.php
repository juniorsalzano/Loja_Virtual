<?php 

  Class Config{
    //INFORMAÇÕES BÁSICAS DO SITE 
    const SITE_URL       = "http://localhost:83";
    const SITE_PASTA     = "loja_virtual";
    const SITE_NOME      = "Loja virtual - Junior Salzano";
    const SITE_EMAIL_ADM = "loja_virtual@hotmail.com";
 
    //INFORMAÇÕES DO BANCO DE DADOS
    const BD_HOST   = "localhost",
          BD_USER   = "root",
          BD_SENHA  = "root",
          BD_BANCO  = "loja_virtual";

    //INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST        = "smtp.gmail.com";
    const EMAIL_USER        = "loja_virtual@hotmail.com";
    const EMAIL_NOME        = "Contato loja virtual";
    const EMAIL_SENHA       = "123456";
    const EMAIL_PORTA       = 587;
    const EMAIL_SMTPAUTH    = true;
    const EMAIL_SMTPSECURE  = "tls";
    const EMAIL_COPIA       = "loja_virtual@hotmail.com";  
  }

 ?>