<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * Description of Contact
 *
 * @author Ingeniero en computación: Ricardo Presilla.
 * @version 1.0.
 */
class Contacto
{
    /**
     * @var string
     * Nombre del contacto. Validación para evitar vacios.
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min =2,
     *     max=200,
     *      minMessage = "El nombre debe ser mínimo {{ limit }} caracteres de largo",
     *      maxMessage = "El nombre no debe tener mas de {{ limit }} caracteres")
     */
    private $nombre;
    /**
     * @var string
     * Email del contacto.
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "El correo electrónico '{{ value }}' no es valido.",
     *     checkMX = true)
     */
    private $correo;
    /**
     * Telefono fijo.
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min =5,
     *     max=20,
     *      minMessage = "El número de teléfono debe ser mínimo {{ limit }} caracteres de largo",
     *      maxMessage = "El número de teléfono no debe tener mas de {{ limit }} caracteres")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="Debe escribir un número de teléfono valido.")
     */
    private $telefono;
    /**
     * Telefono Movil.
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min =5,
     *     max=20,
     *      minMessage = "El número de teléfono móvil debe ser mínimo {{ limit }} caracteres de largo",
     *      maxMessage = "El número de teléfono móvil no debe tener mas de {{ limit }} caracteres")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="Debe escribir un número de teléfono valido, para el campo teléfono móvil.")
     */
    private $telefonoMovil;
    /**
     * constructor
     */
    public function __construct() {
        $this->nombre="";
        $this->correo="";
        $this->telefono=0;
        $this->telefonoMovil=0;
    }
}