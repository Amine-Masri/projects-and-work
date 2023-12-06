using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebApplication4Elaa.Models;

namespace WebApplication4Elaa.Data
{
    public class ScolariteDBContext : DbContext
    {
        public ScolariteDBContext (DbContextOptions<ScolariteDBContext> options)
            : base(options)
        {
        }

        public DbSet<Etudiant> Etudiants { get; set; } = default!;
        public DbSet<Groupe> Groupes { get; set; } = default!;
        public DbSet<Inscription> Inscriptions { get; set; } = default!;
        public DbSet<Matiere> Matieres { get; set; } = default!;
    }
}
