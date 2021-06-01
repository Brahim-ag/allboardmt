<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Noeveau Echelon
      </h2>
    </template>
    <div>
      <div class="container mx-auto grid grid-cols-4 gap-3">
        <div class="col-span-6 sm:col-span-2">
          <hr />

          <div class="form-group">
            <strong>Echelon :</strong>
            <select
              class="custom-select d-block w-100"
              id="state"
              v-model="echelonsData.echelon"
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
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
            </select>
          </div>

          <div class="form-group">
            <strong>Numéro d'Acte :</strong>
            <input
              required
              type="number"
              v-model="echelonsData.number"
              class="mt-1 block w-full"
            />
          </div>
          <div class="form-group">
            <strong>Date de Signature d'Acte :</strong>
            <input
              required
              type="date"
              v-model="echelonsData.dateSign"
              class="mt-1 block w-full"
            />
          </div>
          <div class="form-group">
            <strong>Date d'Effet :</strong>
            <input
              required
              type="date"
              v-model="echelonsData.dateEffe"
              class="mt-1 block w-full"
            />
          </div>
          <div class="form-group">
            <strong>Durée :</strong>
            <select
              class="custom-select d-block w-100"
              v-model="echelonsData.duree"
            >
              <option>Minimale الدنيا</option>
              <option>Moyenne المتوسطة</option>
              <option>maximale القصوى</option>
            </select>
          </div>
          <div class="form-group">
            <strong>Type de Commission :</strong>
            <select
              class="custom-select d-block w-100"
              v-model="echelonsData.typeComm"
            >
              <option>
                Commissions Administratives Paritaires - لجان إدارية متساوية
                الأعضاء
              </option>
              <option>Commissions de Recours - لجان طعن</option>
              <option>Ministre - وزير</option>
              <option>Wali - وال</option>
              <option>Comités Techniques - لجان تقنية</option>
            </select>
          </div>
          <div class="form-group">
            <strong>Numéro d'Approbation :</strong>
            <input
              required
              type="number"
              v-model="echelonsData.numberApp"
              class="mt-1 block w-full"
            />
          </div>

          <div class="form-group">
            <strong>Date de Signature :</strong>
            <input
              required
              type="date"
              v-model="echelonsData.dateSignApp"
              class="mt-1 block w-full"
            />
          </div>
        </div>
      </div>
    </div>
    <input required type="hidden" v-model="echelonsData.employee_id" />

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
      echelonsData: {},
      domaine: [],
    };
  },
  props: ["employee_id"],
  methods: {
    domainList() {
      axios
        .get("/jsonData/domaine.json")
        .then((response) => (this.domaine = response.data));
    },
    postData() {
      axios
        .post("/api/echelons/store", this.echelonsData)
        .then((response) => {
          if (response.status == 201) {
            window.location.href = "/echelons/" + this.employee_id;
          }
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  created() {
    this.domainList();
    this.echelonsData.employee_id = this.employee_id;
  },
};
</script>
