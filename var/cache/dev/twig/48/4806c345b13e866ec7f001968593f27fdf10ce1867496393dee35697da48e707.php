<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7bd55ea0c48dd004bf05b0e6269727d17ad7cecbf9895454bb1b89bfeba1f126 extends Twig_Template
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
        $__internal_393c55808ae570cea8600f5615df16d834811c82c238b6d5c20148ab076bfdd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393c55808ae570cea8600f5615df16d834811c82c238b6d5c20148ab076bfdd2->enter($__internal_393c55808ae570cea8600f5615df16d834811c82c238b6d5c20148ab076bfdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a4a5fadcff2163d359500f582dbb9cbb6f5c1ca3b905ae31b6e68dd891c51d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a5fadcff2163d359500f582dbb9cbb6f5c1ca3b905ae31b6e68dd891c51d5e->enter($__internal_a4a5fadcff2163d359500f582dbb9cbb6f5c1ca3b905ae31b6e68dd891c51d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_393c55808ae570cea8600f5615df16d834811c82c238b6d5c20148ab076bfdd2->leave($__internal_393c55808ae570cea8600f5615df16d834811c82c238b6d5c20148ab076bfdd2_prof);

        
        $__internal_a4a5fadcff2163d359500f582dbb9cbb6f5c1ca3b905ae31b6e68dd891c51d5e->leave($__internal_a4a5fadcff2163d359500f582dbb9cbb6f5c1ca3b905ae31b6e68dd891c51d5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
