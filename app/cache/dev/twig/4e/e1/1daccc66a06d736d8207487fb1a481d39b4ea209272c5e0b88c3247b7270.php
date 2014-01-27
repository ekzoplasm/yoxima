<?php

/* yoximaBlogBundle:Blog:view.html.twig */
class __TwigTemplate_4ee11daccc66a06d736d8207487fb1a481d39b4ea209272c5e0b88c3247b7270 extends Twig_Template
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
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 9
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\" />
";
        }
        // line 11
        echo "<h2>Article ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
        echo "</h2>
<i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
<div class=\"well\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
        echo "
</div>
<p>
<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("yoxima_blog_homepage");
        echo "\" class=\"btn btn-default\">
    <span class=\"glyphicon glyphicon-backward\"></span>
    Retour à la liste
</a>
<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yoxima_blog_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
<span class=\"glyphicon glyphicon-edit\"></span>
Modifier l'article
</a>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yoxima_blog_del", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <span class=\"glyphicon glyphicon-trash\"></span>
        Supprimer l'article
        </a>       
</p>
<h2>Commentaires</h2>
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            echo "<p>
    <i>Par ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author"), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "d/m/Y"), "html", null, true);
            echo "</i>
    <div class=\"well\">
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
            echo "
    </div>
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) < 1)) {
            // line 40
            echo "<div class=\"well\">0 commentaires pour le moment</div>
";
        }
    }

    public function getTemplateName()
    {
        return "yoximaBlogBundle:Blog:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  90 => 31,  81 => 25,  114 => 39,  110 => 32,  100 => 10,  97 => 33,  77 => 39,  23 => 2,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 31,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 17,  63 => 15,  59 => 14,  38 => 6,  94 => 32,  89 => 20,  85 => 46,  75 => 17,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 9,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 43,  105 => 40,  91 => 8,  62 => 13,  49 => 11,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 15,  47 => 12,  40 => 9,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 42,  74 => 21,  66 => 15,  55 => 25,  52 => 21,  50 => 10,  43 => 10,  41 => 9,  35 => 9,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 44,  116 => 40,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 12,  51 => 24,  48 => 11,  45 => 17,  42 => 7,  39 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
