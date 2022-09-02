<section id="online">
    <div class="container">
        <h2 class="mb-5">온라인 접수</h2>
        <div class="container_wr col-md-8 mx-md-auto">
        <form name="onlineform" id="onlineform" >
            <input class="form-control mb-3" type="text" placeholder="응모자 성명" aria-label="default input example">
            <input class="form-control mb-3" type="text" placeholder="연락처" aria-label="default input example">
            <input class="form-control mb-3" type="text" placeholder="이메일" aria-label="default input example">
            <select class="custom-select mb-3" id="inputGroupSelect02" aria-label=".form-select-lg example">
                <option selected="상세부문">상세부문
                    <option value="fairytale">저학년 동화책</option>
                    <option value="shortstory">고학년 단편</option>
                    <option value="novel">고학년 장편</option>
                </option>
            </select>
            <input class="form-control" type="text" placeholder="작품제목" aria-label="default input example">
            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="작품설명"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">원고첨부</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none" rows="3" placeholder="유의사항 
    * 작품 응모시 파일명이나 내용에 이름(필명)을 기재 시 심사에서 제외될 수 있습니다. 
    ​*그림책은 1개의PDF파일로 변환하여 제출 바랍니다.
    * 단편은 3편을 한개의 파일로 한번에 응모 바랍니다. 
    (1편씩 3번 접수시 응모 편수 미달로 심사에서 제외될 수 있습니다.)
    *수상작에 대한 출판권은 출간일 후3년간 주최사(관계사)에 귀속됩니다.
    *상금에는 인세가 포함되어 있으며,제세공과금은 수상자 본인이 부담합니다.
    *심사 기준에 맞는 작품이 없을 경우 수상작이 없을 수 있습니다" readonly ></textarea>
            </div>
            <div class="form-check-all m-0 pl-md-3 pr-md-4">
            <div class="popUpBox01 popUpBox position-absolute h-auto">
                <div class="popUp01 popUp border bg-white p-4">
             <h5 class="text-center ft600">개인정보 수집 및 이용 동의</h5>
             <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none" rows="7" placeholder="(재)금성문화재단은 다음과 같이 귀하의 개인정보를 수집, 이용하고자 합니다.
1. 개인정보 수집 및 이용 목적
 ㆍ응모자 인적사항, 작품 표절시비 및 저작권 침해 구분
 ㆍ수상자 선정시 연락
2. 수집하는 개인정보의 항목
 ㆍ성명(본명/필명), 연락처, 주소, 소속(학교, 학년, 반), 이메일
3.개인정보의 보유 및 이용 기간
 ㆍ비수상자는 수상자 발표 이후 바로 폐기
 ㆍ수상자는 발간일 이후 5년간 보관"
            readonly ></textarea>
            <button class="ft-size-01 bg-transparent border-0 mt-2 position-absolute">
                    <i class="fa-solid fa-xmark"></i>
            </button>
                 </div>
            </div>

            <div class="popUpBox02 popUpBox position-absolute h-auto">
                <div class="popUp02 popUp border bg-white p-4">
             <h5 class="text-center ft600">개인정보 제공 동의</h5>
             <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none" rows="7" placeholder="(재)금성문화재단은 수상자에 한해 개인정보를 다음과 같이 제공하고 있습니다.
1. 개인정보를 제공받는 자 : ㈜문화방송, ㈜금성출판사
2. 개인정보를 제공하는 목적 : 작품의 출판권 귀속 및 저작권 보호
3. 제공하는 개인정보의 항목
ㆍ성명(본명/필명), 연락처, 주소, 소속(학교, 학년, 반), 이메일
4. 제공받는 자의 개인정보 보유 및 이용기간 : 수상 후 5년간 보관"
readonly ></textarea>         
    <button class="ft-size-01 bg-transparent border-0 mt-2 position-absolute">
                    <i class="fa-solid fa-xmark"></i>
            </button>
                 </div>
            </div>

                <dl class="row justify-content-between">
                    <dt class="">
                        <p class="">개인정보 수집 및 이용 동의</p>
                    </dt>
                    <dt class="row">
                        <div class="pr-3 click01"><button class="btn btn_bb">내용보기</button></div>
                        <div class="btn-agree-1">
                            <div class="btn btn_b">
                                <div class="form-check">
                                    <input class="form-check-input d-none" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"><i class="fa-solid fa-check"></i>동의하기</label>     
                                </div>
                            </div>
                        </div>
                        
                    </dt>
                </dl>
                <dl class="row justify-content-between">
                    <dt class="">
                        <p class="">개인정보 제공 동의</p>
                    </dt>
                    <dt class="row">
                        <div class="pr-3 click02"><button class="btn btn_bb">내용보기</button></div>
                        <div class="btn-agree-2">
                            <div class="btn btn_b">
                                <div class="form-check">
                                    <input class="form-check-input d-none" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2"><i class="fa-solid fa-check"></i>동의하기</label>     
                                </div>
                            </div>
                        </div>
                    </dt>
                </dl>
            </div>
            <div class="row justify-content-center">
                <div class="mr-3">
                   <button class="btn btn_bb" type="reset">취소하기</button>
                </div>
                <div class="">
                   <button class="btn btn-primary" type="submit">접수하기</button>
                </div> 
            </div>
        </div>
        </form>
    </div>
   
</section>