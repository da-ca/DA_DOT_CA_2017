<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fef81b9d3bfcc05566ea95bad0b325cfb5c6f9fd38a2b37d198bb50bf819722b extends Twig_Template
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
        $__internal_1a557fee5ef5ca3b5a5edfd0719b3a431793f6c23c094af9fe01dfbd3c33f92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a557fee5ef5ca3b5a5edfd0719b3a431793f6c23c094af9fe01dfbd3c33f92d->enter($__internal_1a557fee5ef5ca3b5a5edfd0719b3a431793f6c23c094af9fe01dfbd3c33f92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_23986f3885585a647afa9df204b448113b77389cc5e0d8db378847d861d2819a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23986f3885585a647afa9df204b448113b77389cc5e0d8db378847d861d2819a->enter($__internal_23986f3885585a647afa9df204b448113b77389cc5e0d8db378847d861d2819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1a557fee5ef5ca3b5a5edfd0719b3a431793f6c23c094af9fe01dfbd3c33f92d->leave($__internal_1a557fee5ef5ca3b5a5edfd0719b3a431793f6c23c094af9fe01dfbd3c33f92d_prof);

        
        $__internal_23986f3885585a647afa9df204b448113b77389cc5e0d8db378847d861d2819a->leave($__internal_23986f3885585a647afa9df204b448113b77389cc5e0d8db378847d861d2819a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
