<?php

/* BibliotecaDemoBundle:Default:editarBiblioteca.html.twig */
class __TwigTemplate_22a7e9e39232423e7ddaea2b6eb1b6f635b977ecd683dbbfbbfbc85be808d98a extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Formulario de Biblioteca</title>
    <style>
        form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type=\"text\"], input[type=\"submit\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box; 
        }

        input[type=\"submit\"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        input[type=\"submit\"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarBiblioteca", array("id" => $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "id"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Actualizar\"/>
    </form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BibliotecaDemoBundle:Default:editarBiblioteca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  62 => 42,  19 => 1,);
    }
}
