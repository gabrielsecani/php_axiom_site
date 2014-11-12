<?php
/**
 * Este arquivo adiciona o Google Analytics usando o código de
 * acompanhamento criado para o site {@link http://axiomteam.works}
 *
 * ID de acompanhamento: UA-55634087-1
 *
 * @author:: Gabriel Lucas de Toledo Ribeiro
 */?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55634087-1', 'auto');
  /** 
    * Atualizar o código de acompanhamento do Google Analytics para oferecer suporte à publicidade gráfica
    * https://support.google.com/analytics/answer/2444872?hl=pt-BR&utm_id=ad
    * https://support.google.com/analytics/answer/3450482 
    */
  ga('require', 'displayfeatures'); 
  ga('send', 'pageview');

</script>