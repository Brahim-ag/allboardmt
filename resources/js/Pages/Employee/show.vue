<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Informations d'employé : {{ employe.name }} {{ employe.lastname }} |
        {{ employe.lastnameAr }}
        {{ employe.nameAr }}
      </h2>
      <div class="inline-block inset-y-0 right-0 w-16" @click="print()">
        <PrinterIcon class="h-5 w-5 text-blue-500" />
      </div>
    </template>
    <navbar :info="employe.id" />

    <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
      <div class="flex-auto">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <div class="px-2 py-5 sm:px-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Informations d'employé
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
              Données personnelles et application .
            </p>
          </div>
          <div class="border-t border-gray-200">
            <dl>
              <div
                class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                <dt class="text-sm font-medium text-gray-500">
                  Numéro d'Identification National
                </dt>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.nin }}
                </dd>
              </div>

              <div
                class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                <dt class="text-sm font-medium text-gray-500">
                  Date de Naissance
                </dt>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.dataNaiss }}
                </dd>
              </div>
            </dl>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Sexe</dt>

            <dd
              class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
              v-if="employe.sexe === 'Masculin'"
            >
              Masculin
            </dd>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" v-else>
              Féminin
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Wilaya de naissance
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.wilaya }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Daïra de naissance
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.dairaNaiss }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Commune de naissance
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.cityNaiss }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Adresse</dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.addres }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Nationalité</dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nationalite }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Nom et Prénom de la Mère
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nameMother }}
              {{ employe.lastnameMother }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Situation Familiale 
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.situation }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Groupe Sanguin  </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bloodType }}
            </dd>
          </div>

          <div class="col-md-4"></div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Logement d'Astreinte  
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.logement }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Numéro de Téléphone   
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.telephone }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Email  </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.email }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Numéro de compte bancaire ou CCP
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankNumber }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Agence bancaire</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankName }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Numéro Sécurité Sociale
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NsocialSecure }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Agence mutuelle  </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.mutuAgence }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Numéro Mutuelle </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NMutu }}
            </dd>
          </div>
        </div>

        <h3></h3>
      </div>
      <div class="flex-auto">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg left-0 top-0">
          <div class="px-2 py-5 sm:px-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              معلومات الموظف
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
              التفاصيل الشخصية والتطبيق
            </p>
          </div>
          <div class="border-t border-gray-200">
            <dl>
              <div
                class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.nin }}
                </dd>
                <dt class="text-sm font-medium text-gray-500">
                  رقم التعريف الوطني
                </dt>
              </div>

              <div
                class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.dataNaiss }}
                </dd>
                <dt class="text-sm font-medium text-gray-500">تاريخ الميلاد</dt>
              </div>
            </dl>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd
              class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
              v-if="employe.sexe === 'Masculin'"
            >
              ذكر
            </dd>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" v-else>
              أنثى
            </dd>
            <dt class="text-sm font-medium text-gray-500">الجنس</dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.wilaya }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">مكان الميلاد</dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.dairaNaiss }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">دائرة الميلاد</dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.cityNaiss }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">البلدية الميلاد</dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.addresAr }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">العنوان</dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nationalite }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">الجنسية</dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nameMotherAr }}
              {{ employe.lastnameMotherAr }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">اسم و لقب الأم</dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.situation }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">الحالة العائلية</dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bloodType }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">فصيلة الدم   </dt>
          </div>

          <div class="col-md-4"></div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.logement }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">سكن وظيفي</dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.telephone }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">رقم الهاتف   </dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.email }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">البريد الإلكتروني</dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankNumber }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">
              رقم الحساب البنكي او البريدي
            </dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankName }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">
              الحساب البنكي او البريدي
            </dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NsocialSecure }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">
              رقم الإشتراك الضمان الاجتماعي
            </dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.mutuAgence }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">التعاضدية  </dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NMutu }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">
              رقم الإشتراك في التعاضدية  
            </dt>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h1>photo <small>for testing </small></h1>
      <img v-bind:src="`data:image/jpeg;base64,`+this.employee.image"/>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";
import Navbar from "@/Jetstream/Navbar";
import { PrinterIcon } from "@heroicons/vue/solid";
import jsPDF from "jspdf";
import JsPDFAutotable from "jspdf-autotable";
import { base64StringToBlob } from "blob-util";
export default {
  components: {
    AppLayout,
    JetActionMessage,
    JetActionSection,
    JetButton,
    JetConfirmationModal,
    JetDangerButton,
    JetDialogModal,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
    JetSecondaryButton,
    JetSectionBorder,
    Navbar,
    PrinterIcon,
    jsPDF,
    JsPDFAutotable,
    base64StringToBlob,
  },
  props: ["employee", "profile", "grade", "recrutements"],

  data: function () {
    return {
      employe: this.employee,
      img: "",
      profiles: this.profile,
      grades: this.grade,
      recrutements: this.recrutements,
    };
  },
  methods: {
    print() {
      var jsonall;
      var col1 = "NumérodIdentificationNational";
      var col2 = "Nom";
      var col3 = "Prenom";
      var col4 = "lieudenaissance";
      var col5 = "NumerodeTelephone";
      var col6 = "Typeducontrat";
      var header1 = "Numéro d'Identification National";
      var header2 = "Nom";
      var header3 = "Prénom";
      var header4 = "lieu de naissance(commune, daira,wilaya)";
      var header5 = "Numéro de Téléphone";
      var header6 = "Type du contrat";
      var table1 = this.profiles;
      console.log(this.grade);
      var table2 = this.grade;

      var table3 = this.recrutements;
      console.log(this.recrutements);

      var Nom = this.employe.name;
      var Prenom = this.employe.lastname;
      var date = this.employe.dataNaiss;
      var lieu = this.employe.cityNaiss + " - " + this.employe.wilaya;
      var filsde = this.employe.nameFather;
      var etde = this.employe.dataNaiss;
      var sf = this.employe.situation;
      var nbreenf = "";
      var adress = this.employe.addres;
      var poste1 = this.employe.dataNaiss;
      var poste2 = this.employe.dataNaiss;
      var direct = this.$page.props.user.current_team.name;

      generatepdf(
        " ",
        "",
        table1,
        table2,
        table3,
        Nom,
        Prenom,
        date,
        lieu,
        filsde,
        etde,
        sf,
        nbreenf,
        adress,
        direct
      );

      function generatepdf(
        ecole,
        annex,
        table1,
        table2,
        table3,
        Nom,
        Prenom,
        date,
        lieu,
        filsde,
        etde,
        sf,
        nbreenf,
        adress,
        direct
      ) {
        var table1toprint = [];
        var table2toprint = [];
        var table3toprint = [];
        for (i = 0; i < table1.length; i++) {
          table1toprint[i] = [];
          table1toprint[i].push(table1[i].level);
          table1toprint[i].push(table1[i].ETABLISSEMENTDENSEIGNEMENT);
          table1toprint[i].push(table1[i].year);
        }
        for (i = 0; i < 1; i++) {
          table2toprint[i] = [];
          table2toprint[i].push(table2[i].grade);
          table2toprint[i].push(table2[i].dateIns);
          table2toprint[i].push(table2[i].GRADEDORIGINE);
          table2toprint[i].push(table2[i].ExperienceGenerale);
        }
        for (var i = 0; i < table3.length; i++) {
          table3toprint[i] = [];
          table3toprint[i].push(table3[i].grade);
          table3toprint[i].push(direct);
          table3toprint[i].push(table3[i].dateEffect);
          table3toprint[i].push(table3[i].AU);
        }
        table3toprint.push([
          {
            content: "Poste Occupé Actuellement  ",
            rowSpan: 2,
          },
          {
            content: poste1,
            colSpan: 3,
          },
        ]);
        table3toprint.push([
          {
            content: poste2,
            colSpan: 3,
          },
        ]);

        const doc = new jsPDF();

        var arabicText = "الجمهورية الجزائرية الديمقراطية الشعبية";
        var arabicText1 = " وزير السكن والعمران والمدينة";
        var arabicText2 = " ";
        var arabicText3 = "DIRECTION GENERALE DES RESSOURCES";
        var text1 = "DIRECTION DES RESSOURCES HUMAINES ET DE LA FORMATION";
        doc.addFont("/font/Amiri-Regular.ttf", "Amiri", "normal");
        doc.setFont("Amiri");
        var arabicText4 = "";
        var arabicText5 = "";
        var arabicText6 = "";

        doc.text(arabicText, 70, 10);
        doc.text(arabicText1, 77, 20);
        doc.setFontSize(11);
        doc.text(arabicText2, 10, 10);
        doc.setFontSize(14);
        doc.text(text1, 105, 50, "center");
        doc.setFontSize(16);
        doc.text(arabicText3, 105, 30, "center");
        doc.setFontSize(14);
        doc.text(arabicText5, 185, 30);
        doc.text(ecole, 184, 30, "right");
        doc.text(annex, 183, 40, "right");
        doc.text(arabicText6, 185, 40);
        doc.text("Nom:" + Nom, 15, 60, "left");
        doc.text("Prenom:" + Prenom, 100, 60, "left");
        doc.text("Date de Naiss:" + date, 15, 67, "left");
        doc.text("Lieu: " + lieu, 100, 67, "left");
        doc.text("Fils de:" + filsde, 15, 74, "left");
        doc.text("Et de: " + etde, 100, 74, "left");
        doc.text("S/F:" + sf, 15, 81, "left");
        doc.text("Nbre d'enf:" + nbreenf, 100, 81, "left");
        doc.text("Adresse:" + adress, 15, 88, "left");
        // Or use javascript directly:

        doc.setFontSize(14);

        doc.text("TITRES ET DIPLOMES:", 15, 98, "left");
        doc.autoTable({
          startY: 103,
          styles: {
            halign: "left",
            fontStyle: "blod",
            font: "Amiri",
            fontSize: 12,
          },

          bodyStyles: {},
          head: [
            [
              "NATURE DU DIPLOME ET STAGE",
              "ETABLISSEMENT D’ENSEIGNEMENT",
              "ANNEE D’OBTENTION",
            ],
          ],
          headStyles: {
            textColor: 255,
            halign: "left",
            fontSize: 13,
            fontStyle: "bold",
            fillColor: [157, 55, 179],
          },
          body: table1toprint,
        });

        doc.text(
          "SITUATION PROFESSIONNELLE:",
          15,
          doc.previousAutoTable.finalY + 15,
          "left"
        );
        doc.autoTable({
          startY: doc.previousAutoTable.finalY + 20,

          styles: {
            halign: "left",
            fontStyle: "blod",
            font: "Amiri",
            fontSize: 12,
          },

          bodyStyles: {},
          head: [
            [
              "GRADE ACTUEL",
              "DATE DE NOMINATION",
              "GRADE D'ORIGINE",
              "Expérience Générale",
            ],
          ],
          headStyles: {
            textColor: 255,
            halign: "left",
            fontSize: 13,
            fontStyle: "bold",
            fillColor: [157, 55, 179],
          },
          body: table2toprint,
        });
        doc.text(
          "PROFIL PROFESSIONNEL - CARRIERE :",
          15,
          doc.previousAutoTable.finalY + 15,
          "left"
        );
        doc.autoTable({
          startY: doc.previousAutoTable.finalY + 20,
          theme: "grid",
          styles: {
            halign: "left",
            fontStyle: "blod",
            font: "Amiri",
            fontSize: 12,
          },

          bodyStyles: {},
          head: [["POSTES ET FONCTIONS EXERCEES", "ETABLISSEMENT", "DU", "AU"]],
          headStyles: {
            textColor: 255,
            halign: "left",
            fontSize: 13,
            fontStyle: "bold",
            fillColor: [157, 55, 179],
          },
          body: table3toprint,
        });
        window.open(doc.output("bloburl"), "_blank");
      }
    },
    previewImage: function () {
     
      var reader = new FileReader();
      this.employe.image = this.employe.image.replace(/^data:.+;base64,/, '')
      //reader.readAsDataURL(this.employe.image);
      
     
    },
  },
  created() {
    this.previewImage();
  },
  computed: {
    // user() {
    //     return this.$page.props.auth.user;
    // },
  },
};
</script>
/