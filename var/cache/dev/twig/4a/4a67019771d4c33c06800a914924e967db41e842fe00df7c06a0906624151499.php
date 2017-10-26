<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_e4133742e4417fd78f214838c881ea170fa45ee75527b02d8b25892d0d91da46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4133742e4417fd78f214838c881ea170fa45ee75527b02d8b25892d0d91da46->enter($__internal_e4133742e4417fd78f214838c881ea170fa45ee75527b02d8b25892d0d91da46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a27295f86360aced094228fafa00ed627010ec8f366863dd8b711e4ebe5c2adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27295f86360aced094228fafa00ed627010ec8f366863dd8b711e4ebe5c2adb->enter($__internal_a27295f86360aced094228fafa00ed627010ec8f366863dd8b711e4ebe5c2adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4133742e4417fd78f214838c881ea170fa45ee75527b02d8b25892d0d91da46->leave($__internal_e4133742e4417fd78f214838c881ea170fa45ee75527b02d8b25892d0d91da46_prof);

        
        $__internal_a27295f86360aced094228fafa00ed627010ec8f366863dd8b711e4ebe5c2adb->leave($__internal_a27295f86360aced094228fafa00ed627010ec8f366863dd8b711e4ebe5c2adb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bd61a51efe2a2318b826fcd5cd044e9199bd905a1a9f2027a397f4bc0f7eba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd61a51efe2a2318b826fcd5cd044e9199bd905a1a9f2027a397f4bc0f7eba9->enter($__internal_2bd61a51efe2a2318b826fcd5cd044e9199bd905a1a9f2027a397f4bc0f7eba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_614bcbb5c065e060d58b76a20dd851f7ad4d44e2f065c581c004c017dcf498d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614bcbb5c065e060d58b76a20dd851f7ad4d44e2f065c581c004c017dcf498d2->enter($__internal_614bcbb5c065e060d58b76a20dd851f7ad4d44e2f065c581c004c017dcf498d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_614bcbb5c065e060d58b76a20dd851f7ad4d44e2f065c581c004c017dcf498d2->leave($__internal_614bcbb5c065e060d58b76a20dd851f7ad4d44e2f065c581c004c017dcf498d2_prof);

        
        $__internal_2bd61a51efe2a2318b826fcd5cd044e9199bd905a1a9f2027a397f4bc0f7eba9->leave($__internal_2bd61a51efe2a2318b826fcd5cd044e9199bd905a1a9f2027a397f4bc0f7eba9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf34489684d5f6af822d4e2663b887c71c398f3147f5b762c749dd14e9722ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf34489684d5f6af822d4e2663b887c71c398f3147f5b762c749dd14e9722ab9->enter($__internal_cf34489684d5f6af822d4e2663b887c71c398f3147f5b762c749dd14e9722ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3094f3d752cca34a575e59c989c70eb797483397da4e6816c7edd060d3fa88d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3094f3d752cca34a575e59c989c70eb797483397da4e6816c7edd060d3fa88d1->enter($__internal_3094f3d752cca34a575e59c989c70eb797483397da4e6816c7edd060d3fa88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3094f3d752cca34a575e59c989c70eb797483397da4e6816c7edd060d3fa88d1->leave($__internal_3094f3d752cca34a575e59c989c70eb797483397da4e6816c7edd060d3fa88d1_prof);

        
        $__internal_cf34489684d5f6af822d4e2663b887c71c398f3147f5b762c749dd14e9722ab9->leave($__internal_cf34489684d5f6af822d4e2663b887c71c398f3147f5b762c749dd14e9722ab9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3de865b6f6749c44727f4f92b61958159e1034e63dba4bfc3d5b75a7ae5b233d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de865b6f6749c44727f4f92b61958159e1034e63dba4bfc3d5b75a7ae5b233d->enter($__internal_3de865b6f6749c44727f4f92b61958159e1034e63dba4bfc3d5b75a7ae5b233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7973f2b5531a74e66c0ad9c63edb3dece93064fb3f486c247758acfde9eac33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7973f2b5531a74e66c0ad9c63edb3dece93064fb3f486c247758acfde9eac33->enter($__internal_e7973f2b5531a74e66c0ad9c63edb3dece93064fb3f486c247758acfde9eac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e7973f2b5531a74e66c0ad9c63edb3dece93064fb3f486c247758acfde9eac33->leave($__internal_e7973f2b5531a74e66c0ad9c63edb3dece93064fb3f486c247758acfde9eac33_prof);

        
        $__internal_3de865b6f6749c44727f4f92b61958159e1034e63dba4bfc3d5b75a7ae5b233d->leave($__internal_3de865b6f6749c44727f4f92b61958159e1034e63dba4bfc3d5b75a7ae5b233d_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}