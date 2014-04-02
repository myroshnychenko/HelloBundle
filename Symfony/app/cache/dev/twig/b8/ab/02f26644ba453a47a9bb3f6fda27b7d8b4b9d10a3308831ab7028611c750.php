<?php

/* AcmeHelloBundle:Default:product_row.html.twig */
class __TwigTemplate_b8ab02f26644ba453a47a9bb3f6fda27b7d8b4b9d10a3308831ab7028611c750 extends Twig_Template
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
        echo "<tr>
    <td><a id=\"delete";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
        echo "\" class=\"btn delete\">Delete</a>
        <a id=\"edit";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
        echo "\" class=\"btn edit\">Edit</a>
    </td>
    <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
        echo "</td>
    <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
        echo "</td>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "price"), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "description"), "html", null, true);
        echo "</td>
</tr>


";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:product_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
