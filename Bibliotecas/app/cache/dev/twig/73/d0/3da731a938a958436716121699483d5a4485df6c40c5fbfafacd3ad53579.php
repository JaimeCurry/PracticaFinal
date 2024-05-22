<?php

/* BibliotecaDemoBundle:Default:index.html.twig */
class __TwigTemplate_73d03da731a938a958436716121699483d5a4485df6c40c5fbfafacd3ad53579 extends Twig_Template
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
    <title>Listado de Bibliotecas</title>
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

        

        .modificar {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .eliminar {
            background-color: #dc3545;
            color: white;
            margin-left: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "</body>
</html>


";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "    <h1>Listado de bibliotecas</h1>
    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("annadirBiblioteca");
        echo "\" class=\"btn\">Añadir Biblioteca</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Horario de Apertura</th>
                <th>Horario de Cierre</th>
                <th>Fecha de Fundación</th>
                <th>Normas</th>
                <th>Acciones</th> 
            </tr>
        </thead>
        <tbody>
            ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotecas"]) ? $context["bibliotecas"] : $this->getContext($context, "bibliotecas")));
        foreach ($context['_seq'] as $context["_key"] => $context["biblioteca"]) {
            // line 78
            echo "                <tr>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "nombre"), "html", null, true);
            echo "</td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "direccion"), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "ciudad"), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "horarioApertura"), "H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "horarioCierre"), "H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "fechaFundacion"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "normas"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarBiblioteca", array("id" => $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "id"))), "html", null, true);
            echo "\" class=\"modificar\">Modificar</a>
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarBiblioteca", array("id" => $this->getAttribute((isset($context["biblioteca"]) ? $context["biblioteca"] : $this->getContext($context, "biblioteca")), "id"))), "html", null, true);
            echo "\" class=\"eliminar\">Eliminar</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>
    ";
    }

    public function getTemplateName()
    {
        return "BibliotecaDemoBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 92,  155 => 88,  151 => 87,  146 => 85,  142 => 84,  138 => 83,  134 => 82,  130 => 81,  126 => 80,  122 => 79,  119 => 78,  115 => 77,  97 => 62,  94 => 61,  91 => 60,  83 => 95,  81 => 60,  20 => 1,);
    }
}
