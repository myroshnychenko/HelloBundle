<?php

/* AcmeHelloBundle:Default:show.html.twig */
class __TwigTemplate_7e65480b25fd3eeb802065ed09c5cfc9077bcc318b30d58648e650ef4f6ec279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " List of products ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
    <div class=\"row\">
        <table id=\"main-table\" class=\"table table-bordered table-striped table-hover\">
        <thead>
            <th><a id=\"add_product_btn\" class=\"btn\">Add product</a></th>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "        <tr>
            <td><a id=\"delete";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
            echo "\" class=\"btn delete\">Delete</a>
                <a id=\"edit";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
            echo "\" class=\"btn edit\">Edit</a>
            </td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "price"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "description"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
        </table>
        <div id=\"add_block\">
            <form action=\"javascript:void(null);\" id=\"add_product_form\" method=\"post\" class=\"add\" ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
                <input type=\"submit\" />
            </form>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  93 => 31,  88 => 28,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  62 => 20,  58 => 19,  55 => 18,  51 => 17,  38 => 6,  35 => 5,  29 => 3,);
    }
}
