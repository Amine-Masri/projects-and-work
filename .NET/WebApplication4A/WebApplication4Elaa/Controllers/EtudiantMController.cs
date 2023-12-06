using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using WebApplication4Elaa.Data;
using WebApplication4Elaa.Models;

namespace WebApplication4Elaa.Controllers
{
    public class EtudiantMController : Controller
    {
        ScolariteDBContext db;
        public EtudiantMController (ScolariteDBContext db)
        {
            this.db = db;
        }
        public IActionResult Index()
        {
            var res=db.Etudiants.Include(e=> e.Groupe).ToList();
            return View(res);
        }
        public IActionResult Ajout()
        {
            ViewData["cmb"] =new SelectList(db.Groupes, "Id", "LibGroupe");
            //ViewBag.GroupeId = new SelectList(db.Groupes, "Id", "LibGroupe");
            return View();
        }
        [HttpPost]
        public IActionResult Ajouter(Etudiant etudiant) {
            if (ModelState.IsValid)
            {
                db.Etudiants.Add(etudiant);
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewData["cmb"] = new SelectList(db.Groupes, "Id", "LibGroupe");
            return View();
        }
        public IActionResult Modif(int? id)
        {
            var etd=db.Etudiants.Find(id);

            ViewData["cmb"] = new SelectList(db.Groupes, "Id", "LibGroupe");
            return View();
        }
    }
}
