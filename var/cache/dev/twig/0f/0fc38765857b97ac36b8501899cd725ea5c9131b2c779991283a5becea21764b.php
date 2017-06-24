<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b730759ed4d07aa23b3411cd84a1a990661529bc93b0339c0b1f15db4b07ce8d extends Twig_Template
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
        $__internal_317afd947d3bc5ff6cae84d0bca94e867920579117fce26d6e969e79d868b4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317afd947d3bc5ff6cae84d0bca94e867920579117fce26d6e969e79d868b4d7->enter($__internal_317afd947d3bc5ff6cae84d0bca94e867920579117fce26d6e969e79d868b4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7e7d336cc771b8a1f0fa7bbd0d8bdda99670de856e3f260e02e1b2a187c99871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7d336cc771b8a1f0fa7bbd0d8bdda99670de856e3f260e02e1b2a187c99871->enter($__internal_7e7d336cc771b8a1f0fa7bbd0d8bdda99670de856e3f260e02e1b2a187c99871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_317afd947d3bc5ff6cae84d0bca94e867920579117fce26d6e969e79d868b4d7->leave($__internal_317afd947d3bc5ff6cae84d0bca94e867920579117fce26d6e969e79d868b4d7_prof);

        
        $__internal_7e7d336cc771b8a1f0fa7bbd0d8bdda99670de856e3f260e02e1b2a187c99871->leave($__internal_7e7d336cc771b8a1f0fa7bbd0d8bdda99670de856e3f260e02e1b2a187c99871_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
