<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9e0f16ef76aeeb43ed6eefc0c4dede062b8e9da94c5088ac1dd04e53ca306780 extends Twig_Template
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
        $__internal_7b885a776faeb389b767c12ea5f00b0a7b47ce69ac50fe813b4de8ce905331fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b885a776faeb389b767c12ea5f00b0a7b47ce69ac50fe813b4de8ce905331fc->enter($__internal_7b885a776faeb389b767c12ea5f00b0a7b47ce69ac50fe813b4de8ce905331fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_00deaefda7ba7995c5002393fba3a7ac5175f790fedff660bdd0b8e8bd639985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00deaefda7ba7995c5002393fba3a7ac5175f790fedff660bdd0b8e8bd639985->enter($__internal_00deaefda7ba7995c5002393fba3a7ac5175f790fedff660bdd0b8e8bd639985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7b885a776faeb389b767c12ea5f00b0a7b47ce69ac50fe813b4de8ce905331fc->leave($__internal_7b885a776faeb389b767c12ea5f00b0a7b47ce69ac50fe813b4de8ce905331fc_prof);

        
        $__internal_00deaefda7ba7995c5002393fba3a7ac5175f790fedff660bdd0b8e8bd639985->leave($__internal_00deaefda7ba7995c5002393fba3a7ac5175f790fedff660bdd0b8e8bd639985_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
