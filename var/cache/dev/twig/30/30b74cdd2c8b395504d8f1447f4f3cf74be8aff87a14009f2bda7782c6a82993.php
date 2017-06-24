<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f474e3d0015c5c13a57af8665e4d88162181a51d3152bef216eb8d49152cb693 extends Twig_Template
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
        $__internal_395d57e701bdbd264394ee939b09991c9b1a805d16b88603a96933d35549544b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395d57e701bdbd264394ee939b09991c9b1a805d16b88603a96933d35549544b->enter($__internal_395d57e701bdbd264394ee939b09991c9b1a805d16b88603a96933d35549544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3892a55b124d13139260f5c6b64763f489c8f46b42a6516acac5f38305a86559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3892a55b124d13139260f5c6b64763f489c8f46b42a6516acac5f38305a86559->enter($__internal_3892a55b124d13139260f5c6b64763f489c8f46b42a6516acac5f38305a86559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_395d57e701bdbd264394ee939b09991c9b1a805d16b88603a96933d35549544b->leave($__internal_395d57e701bdbd264394ee939b09991c9b1a805d16b88603a96933d35549544b_prof);

        
        $__internal_3892a55b124d13139260f5c6b64763f489c8f46b42a6516acac5f38305a86559->leave($__internal_3892a55b124d13139260f5c6b64763f489c8f46b42a6516acac5f38305a86559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
