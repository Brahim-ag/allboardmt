<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Employés de la direction
      </h2>
      <div class="inline-block inset-y-0 right-0 w-16" @click="print()">
        <PrinterIcon class="h-5 w-5 text-blue-500" />
      </div>
      <menu></menu>
    </template>
    <div class="flex flex-col">
      <div class="mx-auto py-10 sm:px-3 lg:px-2">
        <div class="py-2 align-middle inline-block min-w-full sm:px-2 lg:px-8">
          <div
            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
          >
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Nom et Prénom
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                      Date de Naissance
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Wilaya
                  </th>
                   <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                     Situation Familiale 
                  </th>
               


                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Numéro Securite Social
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Numéro Mutuelle
                  </th>
                
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Téléphone
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  ></th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(employe, index) in employees" :key="index">
                  <td class="px-2 py-4 whitespace-nowrap">
                    <inertia-link :href="`/employe/show/${employe.id}`">
                      {{ employe.name }}
                      {{ employe.lastname }}
                    </inertia-link>
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ employe.dataNaiss }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ employe.wilaya }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ employe.NsocialSecure }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ employe.NMutu }}
                  </td>
                   <td class="px-2 py-4 whitespace-nowrap">
                    {{ employe.situation }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ employe.telephone }}
                  </td>

                  <!-- <td class="border"><router-link :to="{name:'editEmploye',params:{id:employe.id}}" >Modifier</router-link></td> -->
                  <td scope="col" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                    <inertia-link
                      
                      :href="`/employe/edit/${employe.id}`"
                    >
                      Modifier</inertia-link
                    >
                  </td>
                </tr>
              </tbody>
            </table>

            <inertia-link :href="`/employe/create/`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Ajouter</inertia-link>
          </div>
        </div>
      </div>
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
import { PrinterIcon } from "@heroicons/vue/solid";
import jsPDF from "jspdf";
import JsPDFAutotable from "jspdf-autotable";

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
    PrinterIcon,
    jsPDF,
    JsPDFAutotable,
  },
  data: function () {
    return {
      employees: [],
    };
  },
  methods: {
    getAll() {
      axios
        .get(
          "api/employees/getall/" + this.$page.props.auth.user.current_team_id
        )
        .then((response) => {
          this.employees = response.data.data;
          console.log(response.data.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },
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
      jsonall = [];
      for (let i = 0; i < this.employees.length; i++) {
        console.log(this.employees[i].name);
        jsonall.push({
          NumérodIdentificationNational: this.employees[i].nin,
          Nom: this.employees[i].name,
          Prenom: this.employees[i].lastname,
          Sexe: this.employees[i].sexe,
          datedenaissance: this.employees[i].dataNaiss,
          lieudenaissance: this.employees[i].cityNaiss +" "+this.employees[i].dairaNaiss +" "+ this.employees[i].wilaya,
          Typedefonctionnaire: "",
          Typeducontrat: this.employees[i].typeContrat,
          Duréeducontrat: "",
          Grade: "",
          DatedInstallation: "",
          Echelon: "",
          DatedEffet: "",
          StructuredAffectation: "",
          Adresse: this.employees[i].addres,
          PosteSuperieur: "",
          FonctionSuperieure: "",
          SituationFamiliale: this.employees[i].situation,
          Prenomdupere: this.employees[i].name,
          NometPrénomdelaMere: this.employees[i].nameMother +" "+ this.employees[i].lastnameMother,
          NumerodeTelephone: this.employees[i].name,
          Email: this.employees[i].name,
          Agencebancaire: "Agence bancaire",
          Nueérodecompte: "Numéro de compte bancaire ou CCP",
          GroupeSanguin: "Groupe Sanguin  ",
          LogementdAstreinte: "Logement d'Astreinte  ",
          NumeroSecuriteSociale: "Numéro Sécurité Sociale",
          Agencemutuelle: "Agence mutuelle  ",
          NumeroMutuelle: "Numéro Mutuelle ",
          Languesetrangeres: "Langues étrangères",
        });
      }
      generatepdf(
        " ",
        "",
       this.$page.props.user.current_team.name,
        jsonall,
        col1,
        col2,
        col3,
        col4,
        col5,
        col6
      );

      function generatepdf(
        ecole,
        annex,
        type,
        jsonAll,
        name,
        col2,
        col3,
        col4,
        col5,
        col6
      ) {
        var Todisplay = [];
        console.log(jsonall);

        for (i = 0; i < jsonAll.length; i++) {
          Todisplay[i] = [];
          Todisplay[i].push(jsonAll[i][name]);
          Todisplay[i].push(jsonAll[i][col2]);
          Todisplay[i].push(jsonAll[i][col3]);

          Todisplay[i].push(jsonAll[i][col4]);

          Todisplay[i].push(jsonAll[i][col5]);

          Todisplay[i].push(jsonAll[i][col6]);
        }

        const doc = new jsPDF();

        var arabicText = "الجمهورية الجزائرية الديمقراطية الشعبية";
        var arabicText1 = " وزير السكن والعمران والمدينة";
        var arabicText2 = "";
        var arabicText3 = "ÉTAT DES FONCTIONNAIRES "  ;
        var arabicText4 = "";
        var text1 = type;
        var arabicText5 = '';
        var arabicText6 = "";
        doc.addFont("/font/Amiri-Regular.ttf", "Amiri", "normal");
        doc.setFont("Amiri");
        doc.text(arabicText, 70, 10);
        doc.text(arabicText1, 77, 20);

        doc.setFontSize(11);
        doc.text(arabicText2, 10, 10);
        doc.setFontSize(14);
        doc.text(arabicText3, 105, 50, "center");
        doc.setFontSize(12);
        doc.text(text1, 105, 60, "center");
        doc.setFontSize(14);
        doc.setFontSize(14);
        doc.text(arabicText5, 185, 30);
        doc.text(ecole, 184, 30, "right");
        doc.text(annex, 183, 40, "right");
        doc.text(arabicText6, 185, 40);
        //
        // Or use javascript directly:
        var pageCount = doc.internal.getNumberOfPages(); //Total Page Number
        for (var i = 0; i < pageCount; i++) {
          doc.setPage(i);
          let pageCurrent = doc.internal.getCurrentPageInfo().pageNumber; //Current Page
          doc.setFontSize(12);
          doc.text("page: " + pageCurrent + "/" + pageCount, 190, 290);
        }
        doc.autoTable({
          startY: 70,

          styles: {
            halign: "left",
            fontStyle: "blod",
            font: "Amiri",
            fontSize: 12,
          },

          bodyStyles: {},
          head: [[header1, header2, header3, header4, header5, header6]],
          headStyles: {
            textColor: 255,
            halign: "left",
            fontSize: 13,
            fontStyle: "bold",
            fillColor: [157, 55, 179],
          },
          body: Todisplay,
        });
        window.open(doc.output("bloburl"), "_blank");
      }
    },
  },
  created() {
    this.getAll();
  },
  computed: {
    user() {
      return this.$page.props.auth.user;
    },
  },
};
</script>
