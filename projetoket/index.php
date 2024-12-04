
<?php
    session_start();
    require_once 'conexao.php';
    include('msg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <script src="script/script.js" ></script>
   <title>Biblioket</title>
</head>
<body>
   <div class="container">
       <header class="total1 detalhes">
       <h1 class="abril-fatface-regular " >BiblioKet </h1>
       </header>   


       <nav class="total detalhes">
           <a href="#livros"> livros em destaque  </a>
           <a href="#valor1"> lançamentos   </a>
           <a href="pagina2.php"> login   </a>
       </nav> 


       <section class=" section detalhes">
        <h2>livros em destaque</h2>
           <div id="livros" class="livros">
            <img src="img/star.png" onclick="estrela1()" class="star" id="star"><a href="https://www.amazon.com.br/Daisy-Jones-Six-hist%C3%B3ria-m%C3%BAsica/dp/8584391401/ref=sr_1_1?crid=2KIYP3AQN5RR7&dib=eyJ2IjoiMSJ9.TRdIb9huw3vkuTmSzC5WHfvuZSqKMCdO4sv0n7MWFiHXpg2jy_0eXEVdYGS4_fMnV8Uv8Tooc3SCipPJqtk91p0P6bYfczD26h_sfpTkP8o6H0dwIzCo7a-UGV-MIbVqMrtKo2-W6pKp3W4gdJybh_w8qCLKDKw5clsyfWMktxwbd1KXh19maKlTe6mz1qJJYmRoDHT_p9idOSVekQ7CKodZ2MLbq83nletVECYh2I8.2CC2lAWo_F8yitI-GodGp3hIE2U7_09I6s0e6g5XgNc&dib_tag=se&keywords=daisy+jones+and+the+six&qid=1726060930&s=books&sprefix=dai%2Cstripbooks%2C186&sr=1-1"><img src="img/1.jpg"></a>
            <img src="img/star.png" onclick="estrela2()" class="star"id="star2"><a href="https://www.amazon.com.br/Melhor-do-que-nos-filmes/dp/6555607289/ref=sr_1_1?crid=2B7EBVXTOCXFM&dib=eyJ2IjoiMSJ9.IEj8e7Jr5Qbj7xGT2bTWwF9wySphERLMKadXU4R7F-_SvK5o7mtjHB6z3ysAIq8Wxkc7QXvqi_s9jn2rPLkp29iacDCT5aE7zVHB_WlmXMP9LNlZ87zbOk32l9ceIjUrxzZRlqPOXuMlXSRDs2xH9v6SjCh_zgjJE1MeolcXT-4qzAiL_jX8V_0IDMcC45UoK0gYmU8ZlCJPGqtCH1ddGJS8PSGhlEHIRm6AopGzu0w.hgSTClVLv6arwHu3m8kAzynO76vS1Xw49oh2cXhicOk&dib_tag=se&keywords=%C3%A9+melhor+que+nos+filmes&qid=1726061812&s=books&sprefix=%2Cstripbooks%2C299&sr=1-1"><img src="img/2.jpg"></a>
            <img src="img/star.png" onclick="estrela3()" class="star"id="star3"><a href="https://www.amazon.com.br/amor-n%C3%A3o-%C3%A9-%C3%B3bvio/dp/8501118265/ref=sr_1_1?crid=3MDD12F36B5HX&dib=eyJ2IjoiMSJ9.Qnq31mgfiiasneQxvxW243AUxDebBTvZORza29o7eRskFjMJKxU68YKN1ZihGOs6AR1YzDLWE7SuBKYLYKZ8TarEOTZFrViLY4usMbvi9Y-3nZwYJ_9wUkvc_QMMm36cTVHJQzLzCHH1FQ9KslUIYLjgseT7oNCEnw44il2fRH7QjJop-nD4-fK_jXJaa6WQls0n9sxHKvbcsYYuh_6-tJ8ofHiqrjfH5Lxr8lSr4TI.NSr_kXaU7sXsaoKpvF72pZsYXTh4RaqADXA1HED_dIs&dib_tag=se&keywords=o+amor+n%C3%A3o+%C3%A9+obvio&qid=1726061901&s=books&sprefix=%2Cstripbooks%2C175&sr=1-1"><img src="img/3.jpg"></a>
            <img src="img/star.png" onclick="estrela4()" class="star" id="star4"><a href="https://www.amazon.com.br/hora-estrela-Edi%C3%A7%C3%A3o-comemorativa/dp/6555320354/ref=sr_1_1?crid=192BSPZ0CZXK3&dib=eyJ2IjoiMSJ9.VxdsYzlhBQsKh5dPwTDbkd_AfMpJwo5LmtF6iIhW66JkYi-_gsyjXw11210SkjLGH7iQUTx3_ngY4ISRkBpJh5jq8nq5qGfAqFn5uAymbvmeqwNFrQG2yryWYpo6SeP1d48uJ4SBv5Ko9YS0of0GlQYuc8-Hs-_KKaPY5A2dlf2DnIeZ4vsb7mhGelyYTNoBmu5sLip4Cvt2Z962gc_2VOgAz3zvcq4f3qLm94GMkDQ.egqrQJ1ZqHoftnVY3BJ5n4Tm9ZcgoD36myGb_JdWGVs&dib_tag=se&keywords=a+hora+da+estrela&qid=1726063847&s=books&sprefix=%2Cstripbooks%2C184&sr=1-1"><img src="img/7.jpg"></a>
           </div>
          
       </section>


       <section class=" section detalhes">
            <h2> lançamentos </h2>
           <div id="valor1" class="valor1">
            <img src="img/star.png" onclick="estrela5()" class="star" id="star5"><a href="https://www.amazon.com.br/Coisas-%C3%B3bvias-sobre-amor-2/dp/6559810119/ref=sr_1_1?crid=90ET3YGKN3KI&dib=eyJ2IjoiMSJ9.7IxCuhbW23YKWFd1iqAL-cNEStVfPsM5NMZE9fJ6I9lCHi2JmaCTBpt2byD4Him8M0sL8rL-tBSjGtZu3D6gv30Y0b8zfBkde0dDXEXewWRS9OvrCMJrMiFulDXGK3qElfrmMuX-RvcIW9skB4YJ-yWaq4II_RzprED7ENeleZy1osVouZ1149xAtPJM88Eiux71S5yl0ly2ofz8y3F0Rh_pygR4yjXaSJ6YILjV8Fo.GbJJf7WQkhESwG7lcgGC4Xbzy2Oz8eEmj9PKVjoNYZA&dib_tag=se&keywords=coisas+obvio+sobre+o+amor&qid=1726251224&s=books&sprefix=c%2Cstripbooks%2C380&sr=1-1"><img src="img/9.jpg"></a>
            <img src="img/star.png" onclick="estrela6()" class="star" id="star6"><a href="https://www.amazon.com.br/empregada-est%C3%A1-olho-Livro/dp/6555656751/ref=sr_1_1?crid=3Q2THSTBFAQ7Z&dib=eyJ2IjoiMSJ9.wttpJnGnayNWEzSVM6J9kFI0eNf0oU_b9OQMEtgzFBDGjHj071QN20LucGBJIEps.nIGoHh7BGwYyTq5G_QzSY1TGOAzrsJZ5qw9f4vMeQM0&dib_tag=se&keywords=a+empregada+est%C3%A1+de+olho&qid=1726251366&s=books&sprefix=a+em%2Cstripbooks%2C175&sr=1-1"><img src="img/11.jpg"></a>
            <img src="img/star.png" onclick="estrela7()" class="star" id="star7"><a href="https://www.amazon.com.br/maldi%C3%A7%C3%A3o-prata-Maldi%C3%A7%C3%A3o-Prata-BRINDES/dp/6559815714/ref=sr_1_5?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dib=eyJ2IjoiMSJ9.dHiWw_x_LehqHu-H-kmNa7TYB5x_-J7naCTDoQGVzkOiI-gClk1_aouzIbJiYxSpfqnjO592H3ut-DzwZGdy8bd7ueiRpXd3uXpLVG2MYuGHhxgkbdXVXlCB7NxCgtmGI6Tme0jUd8ihUvZDzrpxeFQIHa9njEtrW_Rr_pkb9hXwP4LRSELF7BtCUucjwZUM_8C24lxLjtxgwd_zKDdYwhtjG_5I9KG5W6Vse8U68tI.I0JM87Hvjk8oTMbC5OhTXaEY3hDKvPo5JrVeyvpJ_dM&dib_tag=se&keywords=pre+vendas&qid=1726255473&s=books&sr=1-5"><img src="img/21.jpg" ></a>
            <img src="img/star.png" onclick="estrela8()" class="star" id="star8"><a href="https://www.amazon.com.br/C%C3%BAmplices-esc%C3%A2ndalo-BRINDES-Lucy-Vargas/dp/6559243532/ref=sr_1_3?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dib=eyJ2IjoiMSJ9.dHiWw_x_LehqHu-H-kmNa7TYB5x_-J7naCTDoQGVzkOiI-gClk1_aouzIbJiYxSpfqnjO592H3ut-DzwZGdy8bd7ueiRpXd3uXpLVG2MYuGHhxgkbdXVXlCB7NxCgtmGI6Tme0jUd8ihUvZDzrpxeFQIHa9njEtrW_Rr_pkb9hXwP4LRSELF7BtCUucjwZUM_8C24lxLjtxgwd_zKDdYwhtjG_5I9KG5W6Vse8U68tI.I0JM87Hvjk8oTMbC5OhTXaEY3hDKvPo5JrVeyvpJ_dM&dib_tag=se&keywords=pre+vendas&qid=1726255585&s=books&sr=1-3"><img src="img/20.jpg"></a>
           </div>
       </section>
       
       <footer class="total detalhes">
       </footer>

</body>
</html>