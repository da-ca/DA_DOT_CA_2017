<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_db680de66e96e5ac0dc4d5d40c686a94aace465bd72fbf68da5edc00209b9f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6ca8227872723ad4604f42e23971576d6c4e403449c0896338cb0513dddc53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ca8227872723ad4604f42e23971576d6c4e403449c0896338cb0513dddc53f->enter($__internal_d6ca8227872723ad4604f42e23971576d6c4e403449c0896338cb0513dddc53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b32264bd1793452cd26e3c838982b4924b7908086b58ff031801103011a5d2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32264bd1793452cd26e3c838982b4924b7908086b58ff031801103011a5d2cf->enter($__internal_b32264bd1793452cd26e3c838982b4924b7908086b58ff031801103011a5d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d6ca8227872723ad4604f42e23971576d6c4e403449c0896338cb0513dddc53f->leave($__internal_d6ca8227872723ad4604f42e23971576d6c4e403449c0896338cb0513dddc53f_prof);

        
        $__internal_b32264bd1793452cd26e3c838982b4924b7908086b58ff031801103011a5d2cf->leave($__internal_b32264bd1793452cd26e3c838982b4924b7908086b58ff031801103011a5d2cf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ffdf0c652983ded5de4cc7b279a7f09798c007caed2d504eba89c363a670e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffdf0c652983ded5de4cc7b279a7f09798c007caed2d504eba89c363a670e49->enter($__internal_8ffdf0c652983ded5de4cc7b279a7f09798c007caed2d504eba89c363a670e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fea5c41cf9d47bc0222a25b1438ee23b84396e868432ba09e178ba2c8afac8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea5c41cf9d47bc0222a25b1438ee23b84396e868432ba09e178ba2c8afac8c6->enter($__internal_fea5c41cf9d47bc0222a25b1438ee23b84396e868432ba09e178ba2c8afac8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fea5c41cf9d47bc0222a25b1438ee23b84396e868432ba09e178ba2c8afac8c6->leave($__internal_fea5c41cf9d47bc0222a25b1438ee23b84396e868432ba09e178ba2c8afac8c6_prof);

        
        $__internal_8ffdf0c652983ded5de4cc7b279a7f09798c007caed2d504eba89c363a670e49->leave($__internal_8ffdf0c652983ded5de4cc7b279a7f09798c007caed2d504eba89c363a670e49_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e44b181aa2a9583803ed925f9c0e3f7501ab8e8a28c0b23c14dc5b2600bf7998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44b181aa2a9583803ed925f9c0e3f7501ab8e8a28c0b23c14dc5b2600bf7998->enter($__internal_e44b181aa2a9583803ed925f9c0e3f7501ab8e8a28c0b23c14dc5b2600bf7998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a94d06f2f9bcb2ac2ede87ec0779f6726f6f62b4a5f160d1d536e6a2ce28c754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94d06f2f9bcb2ac2ede87ec0779f6726f6f62b4a5f160d1d536e6a2ce28c754->enter($__internal_a94d06f2f9bcb2ac2ede87ec0779f6726f6f62b4a5f160d1d536e6a2ce28c754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a94d06f2f9bcb2ac2ede87ec0779f6726f6f62b4a5f160d1d536e6a2ce28c754->leave($__internal_a94d06f2f9bcb2ac2ede87ec0779f6726f6f62b4a5f160d1d536e6a2ce28c754_prof);

        
        $__internal_e44b181aa2a9583803ed925f9c0e3f7501ab8e8a28c0b23c14dc5b2600bf7998->leave($__internal_e44b181aa2a9583803ed925f9c0e3f7501ab8e8a28c0b23c14dc5b2600bf7998_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2359b35ab0596dfe3e25fa712fd9a4f00fdb314b49e4ac1da139709b45e535ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2359b35ab0596dfe3e25fa712fd9a4f00fdb314b49e4ac1da139709b45e535ab->enter($__internal_2359b35ab0596dfe3e25fa712fd9a4f00fdb314b49e4ac1da139709b45e535ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01b7c3e30ce7e3f0cc93292f7143c67f6bc8af49c7f3d39eca17ddbb3a92ed44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b7c3e30ce7e3f0cc93292f7143c67f6bc8af49c7f3d39eca17ddbb3a92ed44->enter($__internal_01b7c3e30ce7e3f0cc93292f7143c67f6bc8af49c7f3d39eca17ddbb3a92ed44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01b7c3e30ce7e3f0cc93292f7143c67f6bc8af49c7f3d39eca17ddbb3a92ed44->leave($__internal_01b7c3e30ce7e3f0cc93292f7143c67f6bc8af49c7f3d39eca17ddbb3a92ed44_prof);

        
        $__internal_2359b35ab0596dfe3e25fa712fd9a4f00fdb314b49e4ac1da139709b45e535ab->leave($__internal_2359b35ab0596dfe3e25fa712fd9a4f00fdb314b49e4ac1da139709b45e535ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
