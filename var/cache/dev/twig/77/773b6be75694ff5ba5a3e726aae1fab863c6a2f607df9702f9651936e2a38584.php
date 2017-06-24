<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d611ca2e388635edfed45d69060dbcabecb5c73e2367016d8fbb9db03da99e97 extends Twig_Template
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
        $__internal_36c7fe483d15df9241337a962a9f87af60656de5af58f09f0833a67e547df866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c7fe483d15df9241337a962a9f87af60656de5af58f09f0833a67e547df866->enter($__internal_36c7fe483d15df9241337a962a9f87af60656de5af58f09f0833a67e547df866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_809a1327256c4875374493e10fff4fb7abac0ea597194de62924a1193dd17b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809a1327256c4875374493e10fff4fb7abac0ea597194de62924a1193dd17b1b->enter($__internal_809a1327256c4875374493e10fff4fb7abac0ea597194de62924a1193dd17b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_36c7fe483d15df9241337a962a9f87af60656de5af58f09f0833a67e547df866->leave($__internal_36c7fe483d15df9241337a962a9f87af60656de5af58f09f0833a67e547df866_prof);

        
        $__internal_809a1327256c4875374493e10fff4fb7abac0ea597194de62924a1193dd17b1b->leave($__internal_809a1327256c4875374493e10fff4fb7abac0ea597194de62924a1193dd17b1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
