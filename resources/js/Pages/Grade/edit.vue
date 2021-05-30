<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">grade</h2>
    </template>
    <div class="row">
      <div class="container mx-auto grid grid-cols-4 gap-3">
        <div class="col-span-6 sm:col-span-2">
          <div class="form-group">
            <strong>Grade :</strong>
            <select
              class="custom-select d-block w-100"
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
            <strong>Motif de promotion:</strong>
            <select
              class="custom-select d-block w-100"
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
            <strong>Type de Mouvement:</strong>
            <select
              class="custom-select d-block w-100"
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
            <strong>Type d'act:</strong>
            <select
              class="custom-select d-block w-100"
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
              class="mt-1 block w-full"
            />
          </div>

          <div class="form-group">
            <jet-strong>N° PV d’Installation :</jet-strong>
            <input
              required
              type="number"
              v-model="gradesData.npv"
              class="mt-1 block w-full"
            />
          </div>
          <div class="form-group">
            <strong>Numero d'act:</strong>
            <input
              required
              type="number"
              v-model="gradesData.Number"
              class="mt-1 block w-full"
              placeholder="Numero"
            />
          </div>

          <div class="form-group">
            <strong>Date de signature:</strong>
            <input
              required
              type="date"
              v-model="gradesData.dateSignature"
              class="mt-1 block w-full"
              placeholder="dateSignature"
            />
          </div>

          <div class="form-group">
            <strong>Date d'effet:</strong>
            <input
              required
              type="date"
              v-model="gradesData.dateStart"
              class="mt-1 block w-full"
              placeholder="dateStart"
            />
          </div>
          <div class="form-group">
            <strong>Nouveau échelon:</strong>
            <select
              class="custom-select d-block w-100"
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
            <strong>Numero de visa CF:</strong>
            <input
              required
              type="text"
              v-model="gradesData.nVF"
              class="mt-1 block w-full"
              placeholder="nVF"
            />
          </div>
          <div class="form-group">
            <strong>Date de visa CF:</strong>
            <input
              required
              type="date"
              v-model="gradesData.dateVisaRF"
              class="mt-1 block w-full"
            />
          </div>
          <div class="form-group">
            <strong>Date d’installation:</strong>
            <input
              required
              type="date"
              v-model="gradesData.dateIns"
              class="mt-1 block w-full"
              placeholder="dateIns"
            />
          </div>

          <input required type="hidden" v-model="gradesData.employee_id" />
        </div>
      </div>
    </div>
    <button
      @click="postData()"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
    >
      Valider
    </button>
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
