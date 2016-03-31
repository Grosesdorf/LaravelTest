<?php
/**
 * @version   20160315
 */
class GroupCandidate {

    /**
     * Задание 1
     *
     * Из входного массива удалить все элементы, меньшие среднего значения по массиву.
     *
     * Для входного массива:
     * 6, 2, 7, 1, 3, 4, 5
     *
     * Среднее значение равно:
     * 4
     *
     * Следовательно, из входного массива удаляем все значения, которые меньше 4 и получаем:
     * 6, 7, 4, 5
     *
     * @param  array    $list Входной массив
     * @return array          Массив с отфильтрованными значениями
     */
    public function task1($list) {
        // TODO
        if(is_array($list)){	// проверяем массив ли на входе
      		$avr = array_sum($list) / count($list);	// определяем среднее по массиву(можно использовать foreach)
      		foreach ($list as $value) {
      			if($value >= $avr && is_numeric($value) && !is_array($value)){	// проверяем на прнадлежность к числу
      				$tmpArr[] = $value;                                         // и по условию отбора
      			}
      		}
      		return $tmpArr;                                                     // возвращаем перебранный массив
      	}
      	else{
      		echo "This is not Array()";
      		return false;
      	}
    }


    /**
     * Задание 2
     *
     * Написать функцию, рассчитывающую величину налога. На вход функция принимает величину дохода. Налог начисляется по следующему правилу:
     *
     * - если сумма дохода не превышает 500.00, то налог составляет 5% от нее
     * - если сумма не превышает 750.00, то налог составляет 5% на первые 500.00 и 10% на остаток
     * - если сумма не превышает 1500.00, то с первых 500.00 берем 5%, от 500.00 до 750.00 10% и 12.5% с того, что превышает 750.00
     * - если сумма больше 1500.00, то до 1500.00 начисляем по описанному выше правилу, а со всего, что больше берем 15%
     *
     * Например, если доход равен 680.00, то функция должна вернуть 43.00.
     *
     * @param  float   $income  Величина дохода
     * @return float            Сумма налога
     */
    public function task2($income) {
        // TODO
        define ('FIRST_RATE', 500);                 // Определяем константы
        define ('SECOND_RATE', 750);                // для удобства использования,
        define ('THIRD_RATE', 1500);                // если будет необходимость сменить ставки по процентам и/или границы вклада
        define ('FIRST_TAX', 5);                    // Для удобства вводим процент, дальше в фун-ях переведом в доли
        define ('SECOND_TAX', 10);
        define ('THIRD_TAX', 12.5);
        define ('FOURTH_TAX', 15);

        if(is_numeric($income) && !($income < 0)){     // Проверяем на число и не отрицательное

            $inc = (float)($income);                    // Никому не верим и явно преобразовываем
            $rate = False;

            if((FIRST_RATE < SECOND_RATE) && (SECOND_RATE < THIRD_RATE)){
                $rate = True;                           // Определяем соответствие границ вклада
            }

            function firstRate($income){                 // Рассчитываем если до 1-ой границы
                return $income * FIRST_TAX / 100;
            }
            function secondRate($income){                // Рассчитываем если до 2-ой границы
                return (($income - FIRST_RATE) * SECOND_TAX / 100) + firstRate(FIRST_RATE);
            }
            function thirdRate($income){                 // Рассчитываем если до 3-ей границы
                return (($income - SECOND_RATE) * THIRD_TAX / 100) + secondRate(SECOND_RATE);
            }
            function fourthRate($income){               // Рассчитываем если до 4-ой границы
                return (($income - THIRD_RATE) * FOURTH_TAX / 100) + thirdRate(THIRD_RATE);
            }

            if($inc <= FIRST_RATE && $rate){            // В этом блоке выбираем по какой функции считать
                return firstRate($inc);
            }
            elseif($inc <= SECOND_RATE && $rate){
                return secondRate($inc);
            }
            elseif($inc <= THIRD_RATE && $rate){
                return thirdRate($inc);
            }
            elseif ($inc > THIRD_RATE && $rate) {
                return fourthRate($inc);
            }
            else{
                echo "Проверьте соответствие границ вкладов!!!";
                die();
            }
        }
        else{
            echo "Налог по такому вкладу невозможно рассчитать!!!";
            die();
        }
    }

    /**
     * Задание 3
     *
     * Элементы, расположенные на главной диагонали квадратной матрицы отсортировать в порядке возрастания.
     *
     * Например, для входной матрицы:
     * 1 2 3 4
     * 5 6 7 8
     * 9 0 3 2
     * 5 2 4 2
     *
     * Должен быть возвращен результат:
     * 1 2 3 4
     * 5 2 7 8
     * 9 0 3 2
     * 5 2 4 6
     *
     * @param  array $matrix  Квадратная матрица
     * @return array          Матрица с отсортированной главной диагональю
     */
    public function task3($matrix) {
        // TODO
        $countMatrix = count($matrix);              // определяем размерность матрицы, чтоб в цыклах не дергать постоянно

        for($i = 0; $i < $countMatrix; $i++) {      // заполняем временный массив элементами гл.диагонали
            $tmpArray[] = $matrix[$i][$i];
        }

        sort($tmpArray);                            // сортируем временный массив

        for($i = 0; $i < $countMatrix; $i++) {      // заменяем элементы гл.диагонали на отсортированные элементы
            $matrix[$i][$i] = $tmpArray[$i];
        }

        return $matrix;
    }


    /**
     * Задание 4
     *
     * Сформировать одномерный массив, получающийся при чтении прямоугольной матрицы «змейкой по горизонтали», начиная
     * с верхнего левого элемента матрицы двигаться вправо. По достижении конца ряда «змейка» переходит на следующий и
     * начинает двигаться в обратном направлении.
     *
     * Например, для входной матрицы:
     *  1  2  3  4
     *  5  6  7  8
     *  9 10 11 12
     *
     * Должен быть возвращен результат:
     * 1, 2, 3, 4, 8, 7, 6, 5, 9, 10, 11, 12
     *
     * @param  array $matrix  Входная прямоугольная матрица
     * @return array          Одномерный массив
     */
    public function task4($matrix) {
        // TODO
        $countMatrix = count($matrix);                  // определяем размерность матрицы, чтоб в цыклах не дергать постоянно

        for($i = 0; $i < $countMatrix; $i++){
            $k = count($matrix[$i]);                    // определяем размерность вложенного массива
            if(($i + 1) % 2 != 0){                      // определяем четность индекса
                for($y = 0; $y <= $k - 1; $y++) {       // если нечетный
                    $tmpMatrix[] = $matrix[$i][$y];     // заполняем временный массив слева направо
                }
            }
            else{
                for($y = $k - 1; $y >= 0; $y--) {       // если четный
                    $tmpMatrix[] = $matrix[$i][$y];     //заполняем временный массив справа налево
                }
            }
        }
        return $tmpMatrix;
    }
}
