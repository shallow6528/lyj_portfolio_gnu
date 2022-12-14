# MBC창작동화대상 기획전 페이지
### 요약정보
- 링크: https://shallow6528.cafe24.com/award
- 부트스트랩 4.6을 이용한 반응형 공모전 웹페이지 제작
- 기여도: 기획 100%, 디자인 100%, 퍼블리싱 참여 70%, 1인 제작
- 프로젝트 진행 기간: 3주
### 상세내용
- cafe24의 테마 없이 제작하였고 최근게시를 활용해 약 70%의 컨텐츠를 관리자 페이지에서 관리 가능
- seo 최적화를 통한 접근성 유지 및 광고형 랜딩페이지 특성상 제이쿼리 플러그인 지양
- 다양한 플러그인을 주력으로 사용 및 부트스트랩으로 반응형 페이지 제작(aos v2.3.1 / 부트스트랩 v4.6.1 / swiper v8.3.1)
- 아이콘은 이미지가 아닌 font awesome v6.1.1을 이용
- 원활한 협업을 위해 개인제작 CSS를 연결
- 카카오 API 지도를 연동하여 지하철 광고가 있는 위치를 표시(마커 이미지 커스텀)
### Typography, Color
- 폰트는 구글 웹 폰트를 활용하여 대부분의 브라우저에서 깨짐 없이 볼 수 있음
- 컬러는 포인트 색상과 배경 색상으로 나누어 보기 편안하게 구성
![notion-mbc-font](https://user-images.githubusercontent.com/105255343/200227346-b899fe12-1b55-4060-8028-3f8fb9734b0a.jpg)
### 관리 가능 리스트
- 로고
   - 헤더의 로고를 최근 게시 이미지 업로드 통해서 교체 가능

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = logo | 로고 | $img_content

- 메인페이지
   - 메인이미지(로고), 슬라이드 영역 두개로 나누어 최근게시 2개 사용
   - 슬라이드의 책 이미지는 게시글을 추가하거나 삭제하여 이미지 교체 가능

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = as | 썸네일 | $img_content
bo_table = red | 슬라이드 책 이미지 | $img_content

- 소개
   - 소개 페이지의 대부분 최근게시로 관리

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = about | 제목 | wr_subject
　 | 소개 내용 | wr_content
　 | 이미지 | $img_content
　 | 시작 | wr_1
　 | 년도 | wr_2
　 | 배출 작가 | wr_3
　 | 배출한 작가 수 | wr_4

- 어린이 독서단
   - 제목과 링크 연동 관리

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = free | 제목 | wr_subject
　 | 링크 | wr_link1

- 새로운 작가를 찾고있어요
   - 이벤트 정보를 최근게시로 관리

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = event | 제목 | wr_subject
　 | 광고위치 | wr_1
　 | 참가기간 | wr_2
　 | 당첨발표 | wr_3

- 공모전 정보
   - 주기적으로 수정이 필요한 정보를 여분필드를 이용해 수정 가능

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = info | 제목 | wr_subject
　 | 총 상금 액수 | wr_1
　 | 원고마감 | wr_2
　 | 발표 | wr_3
　 | 이메일 | wr_4

- Footer
   - 바뀔 가능성이 있는 주소와 전화번호를 여분필드를 통해 변경 가능

테이블 | 컨텐츠 | 태그
---|---|---|
bo_table = ft | 주소 | wr_1
　 | 링크 | wr_2
  
