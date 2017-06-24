<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f510e911a73edfd010d4a53a885bdfaa289ca5dffe58352c4df34aec83a39d37 extends Twig_Template
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
        $__internal_3b14b6a57d952c5d026d913f52545542792338274db7d6de8eba9d59359fd730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b14b6a57d952c5d026d913f52545542792338274db7d6de8eba9d59359fd730->enter($__internal_3b14b6a57d952c5d026d913f52545542792338274db7d6de8eba9d59359fd730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_09f21cc0a43731a6a2a5f64bcd10aa9e0d1758b10931127c65d2a7255ddd9fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f21cc0a43731a6a2a5f64bcd10aa9e0d1758b10931127c65d2a7255ddd9fe3->enter($__internal_09f21cc0a43731a6a2a5f64bcd10aa9e0d1758b10931127c65d2a7255ddd9fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3b14b6a57d952c5d026d913f52545542792338274db7d6de8eba9d59359fd730->leave($__internal_3b14b6a57d952c5d026d913f52545542792338274db7d6de8eba9d59359fd730_prof);

        
        $__internal_09f21cc0a43731a6a2a5f64bcd10aa9e0d1758b10931127c65d2a7255ddd9fe3->leave($__internal_09f21cc0a43731a6a2a5f64bcd10aa9e0d1758b10931127c65d2a7255ddd9fe3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
