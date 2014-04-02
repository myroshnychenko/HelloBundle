<?php

/* ::base.html.twig */
class __TwigTemplate_1aab6c68be9dd3f1e7ec17b46d51b0331eaf0f3e1bcd5ca30c395b69be14007a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "            <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  84 => 16,  81 => 15,  78 => 14,  73 => 13,  67 => 8,  62 => 7,  59 => 6,  53 => 5,  47 => 19,  44 => 14,  42 => 13,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
