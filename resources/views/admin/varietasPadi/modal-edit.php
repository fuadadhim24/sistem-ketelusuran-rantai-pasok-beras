<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card p-3 p-lg-4">
                                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="card-header border-0 text-center pb-0">
                                        <h2 class="mb-1 h5">Update Varietas Padi</h2>
                                        <p class="mb-3">Informasi lengkap menentukan keputusan anda dalam pemilihan bibit.</p>
                                    </div>
                                    <div class="card-body p-0 pl-lg-3">
                                      <form id="varietasForm" action="{{ route('varietasPadi.store') }}" method="POST">
                                          @csrf
                                          <!-- Form -->
                                          <div class="form-group mb-4">
                                              <label for="nama">Nama Varietas</label>
                                              <div class="input-group">
                                                  <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                                  <input type="text" name="varietas" class="form-control" placeholder="cth: Berikan pupuk hari ini" id="varietas" required>
                                              </div>
                                          </div>
                                          <div class="form-group mb-4">
                                              <label for="deskripsi">Deskripsi</label>
                                              <textarea name="deskripsi" class="form-control" placeholder="Enter your message..." id="deskripsi" rows="3"></textarea>
                                          </div>
                                          <div class="form-group mb-4">
                                              <label for="keunggulan">Keunggulan</label>
                                              <textarea name="keunggulan" class="form-control" placeholder="cth: hasil beras unggul;tahan terhadap penyakit;padi tinggi;" id="keunggulan" rows="4"></textarea>
                                          </div>
                                          <div class="form-group mb-4">
                                              <label class="my-1 me-2" for="country">Jenis Musim</label>
                                              <select name="jenis_musim" class="form-select" id="country" aria-label="Default select example">
                                                  <option value="0" selected>Hujan</option>
                                                  <option value="1">Kemarau</option>
                                              </select>
                                          </div>
                                          <div class="form-group mb-4">
                                              <label for="ketahanan_hama_penyakit">Ketahanan Hama Penyakit</label>
                                              <input type="text" name="ketahanan_hama_penyakit" class="form-control" placeholder="cth: tahan penyakit A, B, C" id="ketahanan_hama_penyakit" required>
                                          </div>
                                          <div class="form-group mb-4">
                                              <label for="hari">Lama Tanam</label>
                                              <div class="input-group">
                                                  <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                                  <input type="number" name="lama_tanam" class="form-control" placeholder="terhitung sejak awal persemaian hingga panen. cth: 120" id="hari" required>
                                              </div>
                                          </div>
                                          <!-- End of Form -->

                                          <div class="d-grid">
                                              <button type="submit" class="btn btn-block btn-primary mb-3 w-100">Simpan</button>
                                          </div>
                                      </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
