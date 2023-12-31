﻿// <auto-generated />
using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using WebApplication4Elaa.Data;

#nullable disable

namespace WebApplication4Elaa.Migrations
{
    [DbContext(typeof(ScolariteDBContext))]
    partial class ScolariteDBContextModelSnapshot : ModelSnapshot
    {
        protected override void BuildModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "6.0.23")
                .HasAnnotation("Relational:MaxIdentifierLength", 128);

            SqlServerModelBuilderExtensions.UseIdentityColumns(modelBuilder, 1L, 1);

            modelBuilder.Entity("WebApplication4Elaa.Models.Etudiant", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("Id"), 1L, 1);

                    b.Property<DateTime>("DateN")
                        .HasColumnType("datetime2");

                    b.Property<int>("GroupeId")
                        .HasColumnType("int");

                    b.Property<string>("Nom")
                        .IsRequired()
                        .HasMaxLength(30)
                        .HasColumnType("nvarchar(30)");

                    b.Property<string>("Prenom")
                        .IsRequired()
                        .HasMaxLength(30)
                        .HasColumnType("nvarchar(30)");

                    b.HasKey("Id");

                    b.HasIndex("GroupeId");

                    b.ToTable("Etudiants");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Groupe", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("Id"), 1L, 1);

                    b.Property<string>("LibGroupe")
                        .IsRequired()
                        .HasMaxLength(30)
                        .HasColumnType("nvarchar(30)");

                    b.HasKey("Id");

                    b.ToTable("Groupes");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Inscription", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("Id"), 1L, 1);

                    b.Property<int>("EtudiantId")
                        .HasColumnType("int");

                    b.Property<int>("MatiereId")
                        .HasColumnType("int");

                    b.HasKey("Id");

                    b.HasIndex("EtudiantId");

                    b.HasIndex("MatiereId");

                    b.ToTable("Inscriptions");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Matiere", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("Id"), 1L, 1);

                    b.Property<string>("LibMatiere")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.HasKey("Id");

                    b.ToTable("Matieres");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Etudiant", b =>
                {
                    b.HasOne("WebApplication4Elaa.Models.Groupe", "Groupe")
                        .WithMany("Etudiants")
                        .HasForeignKey("GroupeId")
                        .OnDelete(DeleteBehavior.Cascade)
                        .IsRequired();

                    b.Navigation("Groupe");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Inscription", b =>
                {
                    b.HasOne("WebApplication4Elaa.Models.Etudiant", "Etudiant")
                        .WithMany("Inscriptions")
                        .HasForeignKey("EtudiantId")
                        .OnDelete(DeleteBehavior.Cascade)
                        .IsRequired();

                    b.HasOne("WebApplication4Elaa.Models.Matiere", "Matiere")
                        .WithMany("Inscriptions")
                        .HasForeignKey("MatiereId")
                        .OnDelete(DeleteBehavior.Cascade)
                        .IsRequired();

                    b.Navigation("Etudiant");

                    b.Navigation("Matiere");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Etudiant", b =>
                {
                    b.Navigation("Inscriptions");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Groupe", b =>
                {
                    b.Navigation("Etudiants");
                });

            modelBuilder.Entity("WebApplication4Elaa.Models.Matiere", b =>
                {
                    b.Navigation("Inscriptions");
                });
#pragma warning restore 612, 618
        }
    }
}
