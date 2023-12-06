using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using TP2.Models;

    public class ScolariteContext : DbContext
    {
        public ScolariteContext (DbContextOptions<ScolariteContext> options)
            : base(options)
        {
        }

        public DbSet<Groupe> Groupe { get; set; }
        public DbSet<Etudiant> Etudiant { get; set;}
}
