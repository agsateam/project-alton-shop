<?php

namespace App\Livewire\Admin\Pengguna;

use Livewire\Component;

class Tambah extends Component
{
    public PenggunaForm $form;
    public $permissions;
    public $BackupPermissions; // untuk menampung backup data permissions
    public $PermissionsProduk = []; // untuk menampung permission produk
    public $PermissionsKategori = []; // untuk menampung permission kategori
    public $PermissionsTransaksi = []; // untuk menampung permission transaksi
    public $PermissionsTentangKami = []; // untuk menampung permission tentang kami
    public $PermissionsKebijakanPrivasi = []; // untuk menampung permission kebijakan privasi
    public $PermissionsSyaratKetentuan = []; // untuk menampung permission syarat dan ketentuan
    public $PermissionsFaq = []; // untuk menampung permission faq
    public $PermissionsBanner = []; // untuk menampung permission banner
    public $PermissionsWarnaTema = []; // untuk menampung permission warna tema
    public $PermissionsKelolaPengguna = []; // untuk menampung permission kelola pengguna
    public $checkbox_hak_akses = [];

    public function mount()
    {
        $this->BackupPermissions = $this->permissions;
        foreach ($this->BackupPermissions->pluck('name') as $item) {
            if (str_contains($item, 'produk')) {
                $this->PermissionsProduk[] = $item;
            }
            if (str_contains($item, 'kategori')) {
                $this->PermissionsKategori[] = $item;
            }
            if (str_contains($item, 'transaksi')) {
                $this->PermissionsTransaksi[] = $item;
            }
            if (str_contains($item, 'tentang kami')) {
                $this->PermissionsTentangKami[] = $item;
            }
            if (str_contains($item, 'kebijakan privasi')) {
                $this->PermissionsKebijakanPrivasi[] = $item;
            }
            if (str_contains($item, 'syarat dan ketentuan')) {
                $this->PermissionsSyaratKetentuan[] = $item;
            }
            if (str_contains($item, 'faq')) {
                $this->PermissionsFaq[] = $item;
            }
            if (str_contains($item, 'banner')) {
                $this->PermissionsBanner[] = $item;
            }
            if (str_contains($item, 'warna tema')) {
                $this->PermissionsWarnaTema[] = $item;
            }
            if (str_contains($item, 'pengguna')) {
                $this->PermissionsKelolaPengguna[] = $item;
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.pengguna.tambah');
    }

    public function simpan()
    {
        $this->form->simpan();
    }
}
