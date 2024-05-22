<?php

/* BibliotecaDemoBundle:Default:listarLibros.html.twig */
class __TwigTemplate_2fbf0f7ecf4b054f6d12fe62893e673af5696134077e1ee6f8a68f85954bdfa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Listado de Libros</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "</body>
</html>

";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "    <h1>Listado de libros</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Sinopsis</th>
                <th>Fecha de Publicación</th>
                <th>Editorial</th>
                <th>ISBN</th>
                <th>Ejemplares</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 56
            echo "                <tr>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "titulo"), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "autor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "sinopsis"), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "fechaPublicacion"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "editorial"), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "isbn"), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "ejemplares"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>
    ";
    }

    public function getTemplateName()
    {
        return "BibliotecaDemoBundle:Default:listarLibros.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 66,  120 => 63,  116 => 62,  112 => 61,  108 => 60,  104 => 59,  100 => 58,  96 => 57,  93 => 56,  89 => 55,  72 => 40,  69 => 39,  62 => 69,  60 => 39,  20 => 1,);
    }
}
