<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
<title>Yoxima blog</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
    <h1>Yoxima Blog</h1>
    <p>A nice adventure to discover Symfony 2 and how it works !!!</p>
    <p><a class=\"btn btn-primary btn-large\" href=\"javascript:alert('ça marche')\">Test</a></p>
    </div>
    <div class=\"row\">
        <div id=\"menu\" class=\"col-xs-6 col-md-4\">
            <h3>Le blog</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("yoxima_blog_homepage");
        echo "\">Accueil du blog</a></li>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("yoxima_blog_add");
        echo "\">Ajouter un article</a></li>
            </ul>
            
            ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("yoximaBlogBundle:Blog:menu", array("nb" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-xs-12 col-md-8\">
            ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        </div>    
    </div>

    <hr/>

    <footer>
    <p>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "html", null, true);
        echo "</p>
    </footer>
  </div>
    ";
        // line 42
        $this->displayBlock('javascript', $context, $blocks);
        // line 46
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "YoximaBlog";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "            ";
    }

    // line 42
    public function block_javascript($context, array $blocks = array())
    {
        // line 43
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery2"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrao/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  110 => 32,  100 => 10,  97 => 9,  77 => 39,  23 => 2,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 31,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 31,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 43,  105 => 40,  91 => 8,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 33,  47 => 12,  40 => 9,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 42,  74 => 14,  66 => 15,  55 => 25,  52 => 21,  50 => 10,  43 => 10,  41 => 7,  35 => 9,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 44,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 24,  48 => 13,  45 => 17,  42 => 7,  39 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
