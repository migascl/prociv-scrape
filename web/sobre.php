
<!DOCTYPE html>
<div class="navbar">
    <a href="/home/index.php">Ínicio</a>
    <div class="dropdown">
        <button class="dropbtn">2019
            <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">
                <a href="/home/graphs/2019/total.php">Casos Baseados em Mês</a>
                <a href="/home/graphs/2019/local.php">Casos Baseados em Localizacoes</a>
                <a href="/home/graphs/2019/media.php">Media de Casos</a>
            </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">2020
            <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">
                <a href="/home/graphs/2020/total.php">Casos Baseados em Mês</a>
                <a href="/home/graphs/2020/local.php">Casos Baseados em Localizacoes</a>
                <a href="/home/graphs/2020/media.php">Media de Casos</a>
            </div>
    </div>
    <a href="/home/sobre.php">Sobre</a>
</div>
<style>
    /* Navbar container */
    
    .navbar {
      overflow: hidden;
      background-color: #333;
      font-family: Arial;
    }

    /* Links inside the navbar */
    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit; /* Important for vertical align on mobile phones */
      margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: #7EA8F8;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
</style>

<div class="sobre">
<h1><strong>Desenvolvido por:</strong></h1>
<h3>Fl&aacute;vio Oliveira - 4225</h3>
<h3>Miguel Leirosa - 4212</h3>
<h3>Nazar Poritskiy - 4226</h3>
<p>&nbsp;</p>
<h1>Resumo</h1>
<p style="text-align: justify;">O projeto de <em>&ldquo;Web Scraping&rdquo;</em> desenvolvido, tem como intuito extrair dados sobre ocorr&ecirc;ncias di&aacute;rias de incidentes, das mais diversas naturezas, registadas em Portugal. A recolha dos dados &eacute; feita atrav&eacute;s do website oficial da Prote&ccedil;&atilde;o Civil nacional &ldquo;<a href="http://www.prociv.pt"><em>www.prociv.pt</em></a>&rdquo;, traduzindo-se assim num trabalho com fontes fidedignas.</p>
<p style="text-align: justify;">O mecanismo desenvolvido foi criado para que fa&ccedil;a a recolha e o armazenamento dos dados de forma autom&aacute;tica e eficaz.</p>
<p style="text-align: justify;">O objetivo final do projeto &eacute; evidenciar factos e estat&iacute;sticas sobre a evolu&ccedil;&atilde;o dos principais &iacute;ndices de ocorr&ecirc;ncias preocupantes em Portugal. Todas as analises criadas s&atilde;o baseadas em informa&ccedil;&otilde;es reais, dispon&iacute;veis pelas autoridades competentes do governo Portugu&ecirc;s, onde se evidencia o balan&ccedil;o e evolu&ccedil;&atilde;o da criminalidade, acidentes rodovi&aacute;rios e inc&ecirc;ndios em Portugal. Para tal, criou-se uma p&aacute;gina web simples, mas que exp&otilde;e a informa&ccedil;&atilde;o de forma bastante elucidativa e possibilita o reajuste de &ldquo;<em>layouts</em>&rdquo; de forma a facilitar interpreta&ccedil;&otilde;es.</p>
<p>&nbsp;</p>
<h1>Bibliografia</h1>
<p>Carvalho, J., Trura, R., &amp; Pr&iacute;ncipe, P. (Abril de 2020). <em>Validador RCAAP: ferramenta para promover a interoperabilidade e a qualidade dos metadados</em>. Obtido de repositorium.sdum.uminho: https://repositorium.sdum.uminho.pt/bitstream/1822/39576/2/12CongressoBAD_SubmissaoPropostas_Validador_RCAAP_apresenta%C3%A7%C3%A3o24x7_short_paper%28final%29.pdf</p>
<p>Civil, A. N. (Abril de 2020). <em>Ocorr&ecirc;ncias em Aberto</em>. Obtido de Prociv: http://www.prociv.pt/pt-pt/SITUACAOOPERACIONAL/Paginas/default.aspx?cID=17</p>
<p>phantomjs.org. (Maio de 2020). <em>PhantomJS - Scriptable Headless Browser</em>. Obtido de phantomjs: https://phantomjs.org/</p>
<p>phantomjs.org. (Maio de 2020). <em>Quick Start with PhantomJS</em>. Obtido de phantomjs: https://phantomjs.org/quick-start.html</p>
<p>w3schools.com. (Junho de 2020). <em>SQL Tutorial</em>. Obtido de w3schools: https://www.w3schools.com/sql/</p>
<p>Webscraper.io. (Abril de 2020). <em>Documentation</em>. Obtido de webscraper: https://webscraper.io/documentation</p>
<p>Webscraper.io. (Abril de 2020). <em>Making web data extraction easy and accessible for everyone</em>. Obtido de Webscraper: https://webscraper.io/</p>
<p>&nbsp;</p>
</div>
<style>

    .sobre {
        font-family: "Arial";
        
    }
    
</style>

