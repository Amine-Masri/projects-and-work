using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebApplication5.Models;

namespace WebApplication5.Data
{
    public class ScolariteDBContext : DbContext
    {
        public ScolariteDBContext (DbContextOptions<ScolariteDBContext> options)
            : base(options)
        {
        }

        public DbSet<Etudiant> Etudiants { get; set; } = default!;
        public DbSet<Matiere> Matieres { get; set; } = default!;
        public DbSet<Groupe> groupes { get; set; } = default!;

        public DbSet<Inscription> inscriptions{ get; set; } = default!;
    }
}
