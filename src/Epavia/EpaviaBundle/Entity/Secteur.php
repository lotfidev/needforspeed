<?php

namespace Epavia\EpaviaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur")
 * @ORM\Entity(repositoryClass="Epavia\EpaviaBundle\Repository\SecteurRepository")
 */
class Secteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Epavia\EpaviaBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_secteur", type="string", length=255)
     */
    private $nomSecteur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSecteur
     *
     * @param string $nomSecteur
     * @return Secteur
     */
    public function setNomSecteur($nomSecteur)
    {
        $this->nomSecteur = $nomSecteur;

        return $this;
    }

    /**
     * Get nomSecteur
     *
     * @return string 
     */
    public function getNomSecteur()
    {
        return $this->nomSecteur;
    }

    /**
     * Set categorie
     *
     * @param \Epavia\EpaviaBundle\Entity\Categorie $categorie
     * @return Secteur
     */
    public function setCategorie(\Epavia\EpaviaBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Epavia\EpaviaBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
