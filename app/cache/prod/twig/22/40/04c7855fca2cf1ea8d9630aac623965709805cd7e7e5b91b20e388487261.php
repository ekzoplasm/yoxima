<?php

/* yoximaBlogBundle:Blog:del.html.twig */
class __TwigTemplate_224004c7855fca2cf1ea8d9630aac623965709805cd7e7e5b91b20e388487261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("yoximaBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'yoximablog_body' => array($this, 'block_yoximablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "yoximaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - home";
    }

    // line 7
    public function block_yoximablog_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2>Supression de l'article ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
        echo "</h2>
<div class=\"alert alert-warning btn-group btn-group-vertical\">
<p>Vous êtes sur le point de supprimer un article. Voulez-vous continuer ?</p>
<button type=\"button\" class=\"btn btn-success\">Oui</button><button type=\"button\" class=\"btn btn-danger\">Non</button>
</div>
<p>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yoxima_blog_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
    <i class=\"icon-chevron-left\"></i>
    Retour à l'article
</a>
<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yoxima_blog_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
<i class=\"icon-edit\"></i>
Modifier l'article
</a>  
</p>
";
    }

    public function getTemplateName()
    {
        return "yoximaBlogBundle:Blog:del.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  110 => 32,  100 => 10,  97 => 9,  83 => 42,  77 => 39,  37 => 12,  23 => 2,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 31,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 31,  63 => 15,  59 => 14,  47 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 46,  79 => 18,  75 => 17,  68 => 14,  56 => 18,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 25,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 9,  44 => 12,  35 => 9,  31 => 8,  43 => 10,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 43,  115 => 43,  105 => 40,  101 => 32,  91 => 8,  69 => 33,  66 => 15,  62 => 23,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 44,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 24,  48 => 13,  45 => 8,  42 => 7,  39 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
