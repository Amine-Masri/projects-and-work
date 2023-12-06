using System.ComponentModel.DataAnnotations;

namespace WebApplication4Elaa.Models
{
    public class Matiere
    {
        public int Id { get; set; }
        [Display(Name = "Matière")]
        public string LibMatiere { get; set; }
        [Display(Name = "Etudiant")]
        public virtual ICollection<Inscription>? Inscriptions { get; set; }
    }
}
