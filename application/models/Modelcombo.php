<?php
	class Modelcombo extends CI_Model
	{
		function combojenisbarang($namafield)
		{
			$sql="select * from tb_jenisbarang";
			$query=$this->db->query($sql);

			$data[""]="Pilih Jenis Barang";
			$no=1;
			foreach ($query->result() as $row )
			{
				$data[$row->id_jenisbarang]=$row->namaJenis;
				$no++;
			}
			echo form_dropdown($namafield,$data,"","class='form-control' id='".$namafield."'");

		}

		function combosatuanbarang($namafield)
		{
			$sql="select * from tb_satuanbarang";
			$query=$this->db->query($sql);

			$data[""]="Pilih Satuan Barang";
			$no=1;
			foreach ($query->result() as $row )
			{
				$data[$row->id_satuan]=$row->namaSatuan;
				$no++;
			}
			echo form_dropdown($namafield,$data,"","class='form-control' id='".$namafield."'");

		}

		function combobarang($namafield)
		{
			$sql="select * from tb_barang";
			$query=$this->db->query($sql);

			$data[""]="Pilih Barang";
			$no=1;
			foreach ($query->result() as $row )
			{
				$data[$row->id_barang]=$row->namaBarang;
				$no++;
			}
			echo form_dropdown($namafield,$data,"","class='form-control' id='".$namafield."'");

		}

		function combosuplier($namafield)
		{
			$sql="select * from tb_suplier";
			$query=$this->db->query($sql);

			$data[""]="Pilih Suplier";
			$no=1;
			foreach ($query->result() as $row )
			{
				$data[$row->id_suplier]=$row->namaSuplier;
				$no++;
			}
			echo form_dropdown($namafield,$data,"","class='form-control' id='".$namafield."'");

		}
    }