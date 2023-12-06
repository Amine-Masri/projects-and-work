using System.ComponentModel.DataAnnotations;

namespace WebApplication4Elaa.Models
{
    public class Etudiant
    {
        public int Id { get; set; }
        [Required]
        [StringLength(30, MinimumLength = 3)]                                                                                                                                  
        public string Nom { get; set; }
        [Required(ErrorMessage ="Prénom Obligatoire")]
        [StringLength(30, MinimumLength = 3)]
        public string Prenom { get; set; }
        [Display(Name ="Date de Naissance")]
        public DateTime DateN { get; set; }
        public string FullName { 
            get {
                return Nom + " " + Prenom;
            }
        }

        [Display(Name = "Groupe")]
        public int GroupeId { get; set; }
        public virtual Groupe? Groupe { get; set; }
        public ICollection<Inscription>? Inscriptions { get; set; }
    }
}
