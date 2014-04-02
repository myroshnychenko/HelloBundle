<?php

/* AcmeHelloBundle:Default:create.html.twig */
class __TwigTemplate_1ab0dd8d4c0874b54a819dd56d7d556d5da155310a7ba3370baa20f9dc251313 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("acme_hello_create");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " >
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }
}
