using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebApplication4.Models;

namespace WebApplication4.Data
{
    public class ScolariteDbContext : DbContext
    {
        public ScolariteDbContext (DbContextOptions<ScolariteDbContext> options)
            : base(options)
        {
        }

        public DbSet<Etudiant> Etudiants { get; set; } = default!;
        public DbSet<Groupe> Groups{ get; set; } = default!;

    }
}
