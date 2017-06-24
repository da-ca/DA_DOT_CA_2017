<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8aa37203657621ce0dc5a945dc43b189173037859898cb22412ae5bc38f48eb4 extends Twig_Template
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
        $__internal_b08db773beb554a7c4dde5432fe6cb89735edfad5d6cd0e1148f392dc70ffdc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08db773beb554a7c4dde5432fe6cb89735edfad5d6cd0e1148f392dc70ffdc5->enter($__internal_b08db773beb554a7c4dde5432fe6cb89735edfad5d6cd0e1148f392dc70ffdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_99a09b1efea3a76477f0f9b2b5aa5ede0850b9795529e9493eaf4faca3aaeb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a09b1efea3a76477f0f9b2b5aa5ede0850b9795529e9493eaf4faca3aaeb57->enter($__internal_99a09b1efea3a76477f0f9b2b5aa5ede0850b9795529e9493eaf4faca3aaeb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b08db773beb554a7c4dde5432fe6cb89735edfad5d6cd0e1148f392dc70ffdc5->leave($__internal_b08db773beb554a7c4dde5432fe6cb89735edfad5d6cd0e1148f392dc70ffdc5_prof);

        
        $__internal_99a09b1efea3a76477f0f9b2b5aa5ede0850b9795529e9493eaf4faca3aaeb57->leave($__internal_99a09b1efea3a76477f0f9b2b5aa5ede0850b9795529e9493eaf4faca3aaeb57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
