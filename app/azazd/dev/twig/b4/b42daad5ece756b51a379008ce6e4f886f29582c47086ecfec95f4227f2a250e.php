<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_616af6fa89ea5f1abb48c155667809768bf55984af95787663aeb04738e8ef6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec585c211c402e7c15237fdb42a6e68b123594a7b8e2143b51119f0e34b131c1 = $this->env->getExtension("native_profiler");
        $__internal_ec585c211c402e7c15237fdb42a6e68b123594a7b8e2143b51119f0e34b131c1->enter($__internal_ec585c211c402e7c15237fdb42a6e68b123594a7b8e2143b51119f0e34b131c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec585c211c402e7c15237fdb42a6e68b123594a7b8e2143b51119f0e34b131c1->leave($__internal_ec585c211c402e7c15237fdb42a6e68b123594a7b8e2143b51119f0e34b131c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57c778a6e78f6fa7ce08062b078cd4a37b065e5adf1e2d71a8442a2f3852b2e8 = $this->env->getExtension("native_profiler");
        $__internal_57c778a6e78f6fa7ce08062b078cd4a37b065e5adf1e2d71a8442a2f3852b2e8->enter($__internal_57c778a6e78f6fa7ce08062b078cd4a37b065e5adf1e2d71a8442a2f3852b2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_57c778a6e78f6fa7ce08062b078cd4a37b065e5adf1e2d71a8442a2f3852b2e8->leave($__internal_57c778a6e78f6fa7ce08062b078cd4a37b065e5adf1e2d71a8442a2f3852b2e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f0598ac755377e5f02ae886f6583c731c4a99e5c9ed35d66df3ea24f51f0095 = $this->env->getExtension("native_profiler");
        $__internal_6f0598ac755377e5f02ae886f6583c731c4a99e5c9ed35d66df3ea24f51f0095->enter($__internal_6f0598ac755377e5f02ae886f6583c731c4a99e5c9ed35d66df3ea24f51f0095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f0598ac755377e5f02ae886f6583c731c4a99e5c9ed35d66df3ea24f51f0095->leave($__internal_6f0598ac755377e5f02ae886f6583c731c4a99e5c9ed35d66df3ea24f51f0095_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22a36ce8661dd224d37ca3bd7c55e39b9b8a355dbcc638f6717e52d69a4e259c = $this->env->getExtension("native_profiler");
        $__internal_22a36ce8661dd224d37ca3bd7c55e39b9b8a355dbcc638f6717e52d69a4e259c->enter($__internal_22a36ce8661dd224d37ca3bd7c55e39b9b8a355dbcc638f6717e52d69a4e259c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22a36ce8661dd224d37ca3bd7c55e39b9b8a355dbcc638f6717e52d69a4e259c->leave($__internal_22a36ce8661dd224d37ca3bd7c55e39b9b8a355dbcc638f6717e52d69a4e259c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
