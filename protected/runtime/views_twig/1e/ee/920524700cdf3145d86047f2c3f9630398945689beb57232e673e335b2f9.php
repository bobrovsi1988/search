<?php

/* \modules\catalog\views\category\twig.html */
class __TwigTemplate_1eee920524700cdf3145d86047f2c3f9630398945689beb57232e673e335b2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Hellow world Twig fsdfsdfsdfsf</h1>
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
        echo "
        ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["jljgfd"]) ? $context["jljgfd"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "\\modules\\catalog\\views\\category\\twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
