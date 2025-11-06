<?php
// Definisikan meta tag untuk halaman ini
$page_title = 'Semua Soal Bahasa Indonesia Paket 1';
$page_description = 'Latihan semua soal dari Bahasa Indonesia Paket 1.';

// Include header
include '../header.php';

// Definisikan soal-soal dalam bentuk array
$questions = [];
?>

<head>
    <style>
        body {
            background-color: #FDFBF8;
            color: #4A4A4A;
        }
        .option-button {
            transition: all 0.3s ease;
            border: 2px solid #D1C7BC;
        }
        .option-button:hover {
            background-color: #E9E4DE;
            border-color: #A59481;
        }
        .option-button.selected {
            background-color: #A59481;
            color: #FFFFFF;
            border-color: #A59481;
        }
        .option-button.correct {
            background-color: #4CAF50 !important;
            color: white !important;
            border-color: #4CAF50 !important;
        }
        .option-button.incorrect {
            background-color: #F44336 !important;
            color: white !important;
            border-color: #F44336 !important;
        }
        .card {
            background-color: #FFFFFF;
            border: 1px solid #E9E4DE;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
    </style>
</head>

<main class="py-20">
    <div class="container mx-auto p-4 sm:p-6 lg:p-8 max-w-7xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-[#4A4A4A] mb-2">Semua Soal Bahasa Indonesia Paket 1</h1>
            <p class="text-lg text-[#6B6B6B]">Kurikulum Merdeka Fase C & K13 Kelas VI</p>
        </header>

        <main class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div id="question-container" class="lg:col-span-2 space-y-6">
                <?php if (empty($questions)) : ?>
                    <div class="card p-6 rounded-xl text-center">
                        <p class="text-lg text-gray-500">Soal-soal belum tersedia.</p>
                    </div>
                <?php else : ?>
                    <?php foreach ($questions as $index => $q) : ?>
                        <div class="card p-6 rounded-xl">
                            <h3 class="text-lg font-bold">Soal <?= $index + 1 ?></h3>
                            <p class="mb-4 text-lg question-text"><?= $q['question'] ?></p>
                            <div id="options-<?= $index ?>" class="space-y-3">
                                <?php foreach ($q['options'] as $key => $option) : ?>
                                    <button data-question-index="<?= $index ?>" data-option-key="<?= $key ?>" class="option-button w-full text-left p-3 rounded-lg">
                                        <span class="font-semibold mr-2"><?= strtoupper($key) ?>.</span> <?= $option ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                            <div id="feedback_<?= $index ?>" class="mt-4"></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <aside class="lg:col-span-1">
                <div class="sticky top-8">
                    <div class="card p-6 rounded-xl">
                        <h2 class="text-xl font-bold mb-4 text-center">Laporan Skor</h2>
                        <div class="chart-container relative w-full max-w-xs mx-auto h-64">
                            <canvas id="scoreChart"></canvas>
                        </div>
                        <div id="score-details" class="mt-4 text-center">
                            <p class="text-lg">Total Soal: <span id="total-questions" class="font-semibold"><?= count($questions) ?></span></p>
                            <p class="text-lg">Benar: <span id="correct-answers" class="font-semibold text-green-600">0</span></p>
                            <p class="text-lg">Salah: <span id="incorrect-answers" class="font-semibold text-red-600">0</span></p>
                            <button id="reset-button" class="mt-4 w-full bg-[#A59481] text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-colors">Ulangi Latihan</button>
                        </div>
                    </div>
                </div>
            </aside>
        </main>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const questions = <?= json_encode($questions) ?>;
    let userAnswers = {};
    let scoreChart;

    const handleOptionClick = (e) => {
        const questionIndex = e.currentTarget.dataset.questionIndex;
        const optionKey = e.currentTarget.dataset.optionKey;
        
        if (userAnswers[questionIndex] !== undefined) return;

        userAnswers[questionIndex] = optionKey;

        const question = questions[questionIndex];
        const optionsContainer = document.getElementById(`options-${questionIndex}`);
        const buttons = optionsContainer.querySelectorAll('.option-button');

        buttons.forEach(button => {
            button.disabled = true;
            const key = button.dataset.optionKey;
            if (key === question.answer) {
                button.classList.add('correct');
            } else if (key === optionKey) {
                button.classList.add('incorrect');
            }
        });

        updateScore();
    };

    const updateScore = () => {
        const correctCount = Object.keys(userAnswers).reduce((acc, index) => {
            return userAnswers[index] === questions[index].answer ? acc + 1 : acc;
        }, 0);
        const incorrectCount = Object.keys(userAnswers).length - correctCount;

        document.getElementById('correct-answers').textContent = correctCount;
        document.getElementById('incorrect-answers').textContent = incorrectCount;

        if (scoreChart) {
            scoreChart.data.datasets[0].data = [correctCount, incorrectCount, questions.length - Object.keys(userAnswers).length];
            scoreChart.update();
        }
    };

    const initChart = () => {
        const ctx = document.getElementById('scoreChart').getContext('2d');
        scoreChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Benar', 'Salah', 'Belum Dijawab'],
                datasets: [{
                    data: [0, 0, questions.length],
                    backgroundColor: ['#4CAF50', '#F44336', '#E0E0E0'],
                    borderColor: ['#FFFFFF'],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: { enabled: true }
                }
            }
        });
    };

    document.querySelectorAll('.option-button').forEach(button => {
        button.addEventListener('click', handleOptionClick);
    });

    document.getElementById('reset-button').addEventListener('click', () => {
        userAnswers = {};
        document.querySelectorAll('.option-button').forEach(button => {
            button.disabled = false;
            button.classList.remove('correct', 'incorrect', 'selected');
        });
        updateScore();
    });

    initChart();
    updateScore();
</script>

<?php
// Include footer
include '../footer.php';
?>
