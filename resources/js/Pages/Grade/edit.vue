<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">grade</h2>
    </template>
     <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Grade :</label>
            <select
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              id="state"
              v-model="gradesData.grade"
            >
              <option
                v-for="(d, index) in grade.corp"
                :key="index"
                :class="{ 'bg-blue-800 text-white': d.disable }"
                v-bind="{ disabled: d.disable }"
              >
                {{ d.name }} - {{ d.postar }}
              </option>
              <option
                v-for="(d, index) in grade.corpts"
                :key="index"
                :class="{ 'bg-blue-800 text-white': d.disable }"
                v-bind="{ disabled: d.disable }"
              >
                {{ d.name }} - {{ d.postar }}
              </option>
              <option
                v-for="(d, index) in grade.ovrir"
                :key="index"
                :class="{ 'bg-blue-800 text-white': d.disable }"
                v-bind="{ disabled: d.disable }"
              >
                {{ d.name }} - {{ d.postar }}
              </option>
              <option
                v-for="(d, index) in grade.agc"
                :key="index"
                :class="{ 'bg-blue-800 text-white': d.disable }"
                v-bind="{ disabled: d.disable }"
              >
                {{ d.name }} - {{ d.postar }}
              </option>
              <option
                v-for="(d, index) in grade.opgi"
                :key="index"
                :class="{ 'bg-blue-800 text-white': d.disable }"
                v-bind="{ disabled: d.disable }"
              >
                {{ d.post }} - {{ d.postar }}
              </option>
              <option
                v-for="(d, index) in grade.aadl"
                :key="index"
                :class="{ 'bg-blue-800 text-white': d.disable }"
                v-bind="{ disabled: d.disable }"
              >
                {{ d.post }} - {{ d.postar }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Motif de promotion:</label>
            <select
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              id="state"
              v-model="gradesData.type"
            >
              <option>Sur Titre على أساس الشهادة</option>
              <option>Formation Spécialisée تكوين متخصص</option>
              <option>Examen امتحان مهني</option>
              <option>Test Professionnels فحص مهني</option>
              <option>Au Choix الاختيار</option>
              <option>----------</option>
            </select>
          </div>

          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Type de Mouvement:</label>
            <select
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              id="state"
              v-model="gradesData.typeM"
            >
              <option>----------</option>
              <option>Promotion dans le grade</option>
              <option>Rétrogradation</option>
              <option>Intégration</option>
            </select>
          </div>

          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Type d'act:</label>
            <select
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              id="state"
              v-model="gradesData.typeDact"
            >
              <option value="Arrete">Arrete</option>
              <option value="Decision">Decision</option>
            </select>
          </div>

          <div class="form-group">
            <jet-strong>Date PV d’Installation :</jet-strong>
            <input
              required
              type="date"
              v-model="gradesData.dpv"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="form-group">
            <jet-strong>N° PV d’Installation :</jet-strong>
            <input
              required
              type="number"
              v-model="gradesData.npv"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Numero d'act:</label>
            <input
              required
              type="number"
              v-model="gradesData.Number"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              placeholder="Numero"
            />
          </div>

          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Date de signature:</label>
            <input
              required
              type="date"
              v-model="gradesData.dateSignature"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              placeholder="dateSignature"
            />
          </div>

          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Date d'effet:</label>
            <input
              required
              type="date"
              v-model="gradesData.dateStart"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              placeholder="dateStart"
            />
          </div>
          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Nouveau échelon:</label>
            <select
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              id="state"
              v-model="gradesData.newEchelon"
            >
              <option disabled>Choisir...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
             
            </select>
          </div>
          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Numero de visa CF:</label>
            <input
              required
              type="text"
              v-model="gradesData.nVF"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              placeholder="nVF"
            />
          </div>
          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Date de visa CF:</label>
            <input
              required
              type="date"
              v-model="gradesData.dateVisaRF"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <div class="form-group">
            <label  class="block text-sm font-medium text-gray-700">Date d’installation:</label>
            <input
              required
              type="date"
              v-model="gradesData.dateIns"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              placeholder="dateIns"
            />
          </div>

          <input required type="hidden" v-model="gradesData.employee_id" />
           <button
      @click="postData()"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
    >
      Valider
    </button>
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
  },
  data() {
    return {
      gradesData: this.Grade,
      grade: [],
    };
  },
  props: ["Grade"],
  methods: {
    gradeList() {
      axios
        .get("/jsonData/grade.json")
        .then((response) => (this.grade = response.data));
      //.then((response) => console.log(response.data));
    },
    postData() {
      axios
        .put("/api/grade/update/" + this.gradesData.id, this.gradesData)
        .then((response) => {
          if (response.status == 200) {
            window.location.href = "/grade/" + this.gradesData.employee_id;
          }
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  created() {
    this.gradeList();
  },
};
</script>
