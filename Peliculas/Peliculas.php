<?

namespace Peliculas;

class Peliculas
{
    private $titulo;
    private $sinopsis;
    private $foto;

    public function __construct( $titulo, $sinopsis, $foto)
    {
        $this->titulo = $titulo;
        $this->sinopsis = $sinopsis;
        $this->foto = $foto;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
}