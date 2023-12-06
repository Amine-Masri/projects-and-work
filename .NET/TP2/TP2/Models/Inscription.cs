using System.ComponentModel.DataAnnotations;

namespace TP2.Models
{
    public class Inscription
    {
        public int Id { get; set; }
        [Display(Name = "Matière")]
        public int MatiereId { get; set; }
        [Display(Name = "Etudiant")]
        public int EtudiantId { get; set; }
        public virtual Etudiant Etudiant { get; set; }
        public virtual Matiere Matiere { get; set; }
    }
}
